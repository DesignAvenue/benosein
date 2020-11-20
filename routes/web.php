<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;



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

Route::get('about',[PagesController::class, 'about'])->name("about");
Route::get('bentows',[PagesController::class, 'bentows'])->name("bentows");
Route::get('service',[PagesController::class, 'service'])->name("service");
Route::get('contact',[PagesController::class, 'contact'])->name("contact");
Route::get('news',[PagesController::class, 'news'])->name("news");

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});