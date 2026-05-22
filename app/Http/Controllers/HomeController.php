<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    // HomePage
    public function index()
    {
        return view('frontend.layouts.home');
    }

    // AboutUs
    public function aboutUs()
    {
        return view('frontend.pages.about_us');
    }

    // Customers
    public function customers()
    {
        return view('frontend.pages.customers');
    }

    // SuccessStories
    public function successStories()
    {
        return view('frontend.pages.success_stories');
    }

    // ContactUs
    public function contactUs()
    {
        return view('frontend.pages.contact_us');
    }

    // Benefits
    public function benefits()
    {
        return view('frontend.pages.benefits');
    }

    // Blog
    public function blog()
    {
        return view('frontend.pages.blog');
    }

    // BlogDetails
    public function blogDetails()
    {
        return view('frontend.pages.blogdetails');
    }
}