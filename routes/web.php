<?php

use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\Front\HomeController::class, 'index'])->name('front.home')->middleware('languages');
Route::get('/languages', [\App\Http\Controllers\Front\LanguageController::class, 'setLanguage'])->name('front.langs');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('categories', [\App\Http\Controllers\Front\CategoryController::class, 'index'])->name('categories.index');
Route::group(['middleware' => 'languages', 'as' => 'front.'], function(){
    Route::get('about', [AboutController::class, 'index'])->name('about');
    Route::get('contact', [ContactController::class, 'index'])->name('contact');
});


