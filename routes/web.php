<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

define('BACKEND_ROUTES_PATH', realpath(__DIR__) . DIRECTORY_SEPARATOR . 'subroutes' . DIRECTORY_SEPARATOR);

// Backend routes
include_once(BACKEND_ROUTES_PATH . 'subroute.php');

// Home Page
Route::get('/', [HomeController::class, 'index']);

// Subpage
Route::get('about-us', [HomeController::class, 'aboutUs'])->name('frontend.pages.about-us');
Route::get('customers', [HomeController::class, 'customers'])->name('frontend.pages.customers');
Route::get('success-stories', [HomeController::class, 'successStories'])->name('frontend.pages.success-stories');
Route::get('contact-us', [HomeController::class, 'contactUs'])->name('frontend.pages.contact-us');

// Footer Page
Route::get('benefits', [HomeController::class, 'benefits'])->name('frontend.pages.benefits');
Route::get('blog', [BlogController::class, 'blog'])->name('frontend.pages.blog');
Route::get('blogdetails/{id}', [BlogController::class, 'blogDetails'])->name('frontend.pages.blogdetails');
// Store Blog Comments
Route::post('/blog/{id}/comment', [BlogController::class, 'storeComments'])->name('blog.comment.store');

// Form Page
Route::get('/enquiry', [FormController::class, 'index']);
Route::post('/store-enquiry', [FormController::class, 'store'])->name('store');


// MAIL_MAILER=smtp
// MAIL_HOST=smtp.example.com
// MAIL_PORT=587
// MAIL_USERNAME=your-email@example.com
// MAIL_PASSWORD=your-email-password
// MAIL_FROM_ADDRESS=your-email@example.com
// MAIL_FROM_NAME="Your Site Name"
// MAIL_ADMIN=admin@example.com

