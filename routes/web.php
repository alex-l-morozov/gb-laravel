<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Account\IndexController as AccountController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UploadController;

use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\FeedbackController as AdminFeedbackController;
use App\Http\Controllers\Admin\UploadController as AdminUploadController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

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
// Страница с информацией о проекте
Route::get('/about/', function () {
    return view('about');
});
Route::get('/news', [NewsController::class, 'index'])
    ->name('news');

Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');

Route::get('/category', [CategoryController::class, 'index'])
    ->name('category');

Route::get('/category/{id}', [CategoryController::class, 'show'])
    ->where('id', '\d+')
    ->name('category.show');

Route::get('/feedback', [FeedbackController::class, 'index'])
    ->name('feedback');
Route::post('/feedback', 'App\Http\Controllers\FeedbackController@save')
    ->name('feedback.save');

Route::get('/upload', [UploadController::class, 'index'])
    ->name('upload');
Route::post('/upload', 'App\Http\Controllers\UploadController@save')
    ->name('upload.save');

Route::group(['middleware'=>'auth'], function() {
    Route::get('/account', AccountController::class)
        ->name('account');
    //admin routes
    Route::group(['middleware'=>'admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('/', AdminController::class)
            ->name('index');
        Route::resource('/categories', AdminCategoryController::class);
        Route::resource('/news', AdminNewsController::class);
        Route::resource('/feedback', AdminFeedbackController::class);
        Route::resource('/upload', AdminUploadController::class);
        Route::resource('/users', AdminUserController::class)->withoutMiddleware(['auth']);
    });
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
