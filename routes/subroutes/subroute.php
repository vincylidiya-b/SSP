<?php
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Register routes for the given items using the specified controller.
 *
 * @param \Illuminate\Support\Collection $items
 * @param string $controllerClass
 * @param string|null $prefix
 */

function registerRoutesForItems($items, string $controllerClass, ?string $prefix = null): void
{
    foreach ($items as $item) {
        $slug = $prefix ? "{$prefix}/{$item->slug}" : $item->slug;
        Route::get($slug, [$controllerClass, 'common'])->name($slug);
    }
}

if (Schema::hasTable('blogs')) {
    $blogs = \App\Models\Blog::all();
   
    if ($blogs->isNotEmpty()) {
        registerRoutesForItems($blogs, BlogController::class, 'blog');
    }
}