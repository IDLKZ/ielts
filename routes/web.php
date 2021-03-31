<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\FrontendController;
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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    Route::get('/', [FrontendController::class,"index"]);

    Auth::routes(["register"=>"false"]);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('ielts', App\Http\Controllers\IeltsController::class);
    Route::resource('advantages', App\Http\Controllers\AdvantageController::class);
    Route::resource('abouts', App\Http\Controllers\AboutController::class);
    Route::resource('news', App\Http\Controllers\NewsController::class);
    Route::resource('services', App\Http\Controllers\ServiceController::class);
    Route::resource('backgrounds', App\Http\Controllers\BackgroundController::class);
    Route::resource('teachers', App\Http\Controllers\TeacherController::class);
    Route::resource('teacherLinks', App\Http\Controllers\TeacherLinkController::class);
    Route::resource('galleries', App\Http\Controllers\GalleryController::class);
    Route::resource('prices', App\Http\Controllers\PriceController::class);

});
Route::post('ckeditor/upload', [ContentController::class,"upload"])->name('ckeditor.upload');















Route::resource('faqs', App\Http\Controllers\FaqController::class);

Route::resource('reviews', App\Http\Controllers\ReviewController::class);

Route::resource('photos', App\Http\Controllers\PhotoController::class);

Route::resource('phones', App\Http\Controllers\PhoneController::class);

Route::resource('emails', App\Http\Controllers\EmailController::class);
