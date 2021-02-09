<?php

use App\Http\Controllers\Blog\PostsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Middleware\VerifyCategoriesCount;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\WelcomeController@index')->name('welcome');
Route::get('services', function(){return View::make('pages.services');});
Route::get('about', function(){return View::make('pages.about');});
Route::get('portfolio', function(){return View::make('pages.portfolio');});
Route::get('contact', function(){return View::make('pages.contact');});
Route::get('blog-right', function(){return View::make('pages.blog-right');});
Route::get('our-clients', function(){return View::make('pages.our-clients');});
Route::get('privacy-policy', function(){return View::make('pages.privacy-policy');});
Route::get('terms-and-conditions', function(){return View::make('pages.terms-and-conditions');});
Route::get('error', function(){return View::make('pages.error');});
Route::get('single-blog-post', function(){return View::make('pages.single-blog-post');});
Route::get('faq', function(){return View::make('pages.faq');});
Route::get('web-development', function(){return View::make('pages.web-development');});
Route::get('marketing-strategy', function(){return View::make('pages.marketing-strategy');});
Route::get('e-commerce-solutions', function(){return View::make('pages.e-commerce-solutions');});
Route::get('app-development', function(){return View::make('pages.app-development');});

Route::get('blog/posts/{post}', [App\Http\Controllers\Blog\PostsController::class, 'show'])->name('blog.show');
Route::get('blog/categories/{category}', [App\Http\Controllers\Blog\PostsController::class, 'category'])->name('blog.category');
Route::get('blog/tags/{tag}', [App\Http\Controllers\Blog\PostsController::class, 'tag'])->name('blog.tag');

Auth::routes();

Route::middleware(['auth'])->group(function() {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('categories', 'App\Http\Controllers\CategoriesController');
    Route::resource('posts', 'App\Http\Controllers\PostsController');
    Route::resource('tags', 'App\Http\Controllers\TagsController');
    Route::get('trashed-posts', 'App\Http\Controllers\PostsController@trashed')->name('trashed-posts.index');
    Route::put('restore-post/{post}', 'App\Http\Controllers\PostsController@restore')->name('restore-posts');

});
//write full path to controller!
Route::middleware(['auth', 'admin'])->group(function() {
    Route::get('users/profile', 'App\Http\Controllers\UsersController@edit')->name('users.edit-profile');
    Route::put('users/profile', 'App\Http\Controllers\UsersController@update')->name('users.update-profile');
    Route::get('users', 'App\Http\Controllers\UsersController@index')->name('users.index');
    Route::post('users/{user}/make-admin', 'App\Http\Controllers\UsersController@makeAdmin')->name('users.make-admin');
});