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


Route::get('/contact', 'PageGenerationData@generateContacts');
Route::post('/contact', 'MailSendController@sendMail');

Route::get('/blog', function () {
    return view('blog.blogs');
});

Route::get('/blogs/{blog}', 'PageGenerationData@generateBlog');

Route::get('/listings', 'PageGenerationData@generateListings');
Route::get('/listings/search', 'FormController@searchListenings');
Route::post('/listings/search', 'FormController@searchListenings')->name('search_form');

Route::get('/listing/{listing}', 'PageGenerationData@generateListing')->name('listing');
Route::post('/listing/{listing}', 'MailSendController@sendMail');

Route::get('/admin', 'PageGenerationData@generateAdmin');
Route::get('/admin/listings', 'PageGenerationData@generateAdminListings');
Route::post('/admin/listings', 'FormController@getDataToListings')->name('getDataToListings');
