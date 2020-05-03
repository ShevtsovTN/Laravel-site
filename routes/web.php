<?php

use App\Models\Review;
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

Route::get('/', 'PageGenerationData@generateIndex');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/listings', 'PageGenerationData@generateListings');

Route::get('/blog', function () {
    return view('blog.blogs');
});

Route::get('/listings/{listing}', 'PageGenerationData@generateListing');

Route::get('/blogs/{blog}', 'PageGenerationData@generateBlog');

Route::get('/form/search', 'FormController@searchListenings');
