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
    Route::get('clear_cache', function () {

        Artisan::call('config:cache');

        return 'DONE!';

    });

    Route::get('/', [FrontendController::class,"index"])->name('main');
    Route::get("/about",[FrontendController::class,"about"])->name("about");

    Route::get("/teacher",[FrontendController::class,"teacher"])->name("teacher");
    Route::get("/teacher-info/{alias}",[FrontendController::class,"teacherInfo"])->name("teacherInfo");

    Route::get("/gallery",[FrontendController::class,"gallery"])->name("gallery");
    Route::get("/faq",[FrontendController::class,"faq"])->name("faq");
    Route::get("/my-ielts",[FrontendController::class,"ielts"])->name("my-ielts");

    Route::get("/course",[FrontendController::class,"course"])->name("course");
    Route::get("/course-info/{alias}",[FrontendController::class,"courseInfo"])->name("courseSingle");

    Route::get("/my-prices",[FrontendController::class,"prices"])->name("my-prices");

    Route::get("/blog",[FrontendController::class,"blogs"])->name("blogs");
    Route::get("/blog-info/{alias}",[FrontendController::class,"blogInfo"])->name("blogInfo");
    Route::get("/contact",[FrontendController::class,"contact"])->name("contact");

    Route::post("/send-message",[FrontendController::class,"sendMessage"])->name("send-message");
    Route::post("/send-message-from-modal",[FrontendController::class,"sendModal"])->name("send-modal");
    Route::get('/schedule', [FrontendController::class, 'schedule'])->name('schedule');

    Route::get("/kymbat",[\App\Http\Controllers\AuthController::class,"login"])->name("login");
    Route::post("/auth",[\App\Http\Controllers\AuthController::class,"auth"])->name("auth");
    Route::get("/logout",[\App\Http\Controllers\AuthController::class,"logout"])->name("logout");
    Route::get("/security",[FrontendController::class,"security"])->name("security");
    Route::get("/documents",[FrontendController::class,"document"])->name("document");
    Route::get("/privacy",[FrontendController::class,"privacy"])->name("privacy");


    Route::group(["middleware" => "admin"],function (){
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
        Route::resource('faqs', App\Http\Controllers\FaqController::class);
        Route::resource('reviews', App\Http\Controllers\ReviewController::class);
        Route::resource('photos', App\Http\Controllers\PhotoController::class);
        Route::resource('phones', App\Http\Controllers\PhoneController::class);
        Route::resource('emails', App\Http\Controllers\EmailController::class);
        Route::resource('headers', App\Http\Controllers\HeaderController::class);
        Route::resource('seos', App\Http\Controllers\SeoController::class);
        Route::resource('logos', App\Http\Controllers\LogoController::class);
        Route::resource('footers', App\Http\Controllers\FooterController::class);
        Route::resource('socials', App\Http\Controllers\SocialController::class);
        Route::post("admin-change",[\App\Http\Controllers\HomeController::class,"change"])->name("admin-change");
        Route::resource('schedules', App\Http\Controllers\ScheduleController::class);
        Route::resource("service-teacher",\App\Http\Controllers\ServiceTeacherController::class);
        Route::resource("/pupils",\App\Http\Controllers\PupilController::class);

    });


});
Route::post('ckeditor/upload', [ContentController::class,"upload"])->name('ckeditor.upload');
























Route::resource('securities', App\Http\Controllers\SecurityController::class);

Route::resource('documents', App\Http\Controllers\DocumentController::class);


Route::resource('workdays', App\Http\Controllers\WorkdayController::class);

Route::resource('privicies', App\Http\Controllers\PrivicyController::class);
