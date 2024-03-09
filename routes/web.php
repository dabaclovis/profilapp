<?php

use App\Http\Controllers\Admins\AdminsController;
use App\Http\Controllers\Articles\ArticlesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Pages\PagesController;

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

Route::controller(PagesController::class)->group(function(){
    Route::get('/','index')->name('pages.index');
    Route::get('about','about')->name('pages.about');
    Route::get('contact','contact')->name('pages.contact');
    Route::get('resume','resume')->name('pages.resume');
});
// register
Route::post('registered',[RegisterController::class,'handledRegister'])->name('handled');
// login
Route::post('redirection',[LoginController::class, 'redirection'])->name('redirect');
// admin
Route::prefix('admins')->group(function(){
    Route::resource('articles', ArticlesController::class);
    Route::controller(AdminsController::class)->group(fn() => [
        Route::get('dashboard','index')->name('admins.index'),
    ]);
});
Auth::routes();

Route::prefix('users')->group(fn() => [
    Route::controller(HomeController::class)->group(function(){
        Route::get('home','index')->name('home');
    }),
]);
