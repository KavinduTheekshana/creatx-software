<?php

use Illuminate\Support\Facades\Route;
use App\Models\contact;
use App\Models\news;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('services', function () {
    return view('services');
});

Route::get('hosting', function () {
    return view('hosting');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('projects', function () {
    return view('projects');
});

Route::get('about', function () {
    return view('about');
});

Route::get('careers', function () {
    return view('careers');
});





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/contacts', function () {
    $contatcs = Contact::orderBy('id', 'desc')->get();
    return view('contacts',['contatcs' => $contatcs]);
})->name('contacts');


Route::middleware(['auth:sanctum', 'verified'])->get('/news_letter', function () {
    $news = News::orderBy('id', 'desc')->get();
    return view('news_letter',['news' => $news]);
})->name('news_letter');


Route::POST('newslettersubmit', 'App\Http\Controllers\NewsController@newslettersubmit');
Route::POST('contactform', 'App\Http\Controllers\ContactController@contactform');
