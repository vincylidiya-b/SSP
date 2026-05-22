<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Log;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs'; 
     protected $casts = [
        'description' => 'json',
    ];
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'description',
        'image',
        'author',
    ];

     protected $appends = [
        'slug_url'
     ];

    /**
     * Automatically generate slug from title if not set.
     */
     public function getSlugUrlAttribute(): string
    {
        return url('blog/' . $this->slug);
    }


    /**
     * Accessor to get the full image URL.
     */
    public function comments()
    {
        return $this->hasMany(BlogComment::class);
    }
    
 protected static function boot()
{
    parent::boot();

    static::deleting(function ($post) {
        Log::info("Deleting post with ID: " . $post->id);

        // Delete the feature image
        if ($post->image && Storage::disk('public')->exists($post->image)) {
            Storage::disk('public')->delete($post->image);
            Log::info("Deleted feature image: " . $post->image);
        } else {
            Log::warning("Feature image not found: " . $post->image);
        }

        // Delete images from the `description` JSON field
        if (!empty($post->description) && is_array($post->description)) {
            foreach ($post->description as $block) {
                if (isset($block['url'])) {
                    $imagePaths = is_array($block['url']) ? $block['url'] : [$block['url']];
                    
                    foreach ($imagePaths as $imagePath) {
                        if (Storage::disk('public')->exists($imagePath)) {
                            Storage::disk('public')->delete($imagePath);
                            Log::info("Deleted JSON content image: " . $imagePath);
                        } else {
                            Log::warning("JSON content image not found: " . $imagePath);
                        }
                    }
                }
            }
        }

        // Delete images from the directories
        $directories = [
            'file-manager/blog/image',
            'file-manager/blog/images',
        ];

        foreach ($directories as $dir) {
            $files = Storage::disk('public')->files($dir);
            foreach ($files as $file) {
                if (Storage::disk('public')->exists($file)) {
                    Storage::disk('public')->delete($file);
                    Log::info("Deleted image from directory: " . $file);
                }
            }
        }
    });
}
}