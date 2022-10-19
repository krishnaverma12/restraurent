<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[FrontendController::class,'home'])->name('home');
Route::get('/home',[FrontendController::class,'home'])->name('home');
Route::get('/about',[FrontendController::class,'about'])->name('about');
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
Route::get('/chef',[FrontendController::class,'chef'])->name('chef');
Route::get('/menu',[FrontendController::class,'menu'])->name('menu');
Route::get('/gallery',[FrontendController::class,'gallery'])->name('gallery');