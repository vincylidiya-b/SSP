<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogComment;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
class BlogController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    // HomePage
   public function common(Request $request)
    {
        $segments = $request->segments();
        $lastSegment = end($segments);

        // Find the blog by slug
        $blogs = Blog::where('slug', $lastSegment)->first();
        
        // Check if the blog exists
        if (!$blogs) {
            abort(404); // Return 404 if the blog is not found
        }

        // Count comments only for the specific blog ID
        $blogCommentCount = BlogComment::where('blog_id', $blogs->id)->count();

         $latestBlogs = Blog::latest()->take(10)->get();

        return view('frontend.pages.blogdetails', compact('blogs', 'blogCommentCount', 'latestBlogs'));
    }


    // Blog
    public function blog()
    {
        $blogs = Blog::latest()->paginate(10);
       
        return view('frontend.pages.blog', compact('blogs'));
    }

    // BlogDetails
    // public function blogDetails($id)
    // {
    //     dd($id);
    //     $blog = Blog::with('comments')->findOrFail($id);
        
    //     return view('frontend.pages.blogdetails', compact('blog'));
    // }

    // Store Blog Comments
    public function storeComments(Request $request, $blogId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'comment' => 'required|string|max:1000',
            'website' => 'nullable|string|max:255',
        ]);

        BlogComment::create([
            'blog_id' => $blogId,
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'website' => $request->website ?? null,
        ]);

        return back()->with('success', 'Your comment has been successfully submitted.');
    }
}