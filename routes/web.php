<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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


Route::get('/',[FrontEndController::class,'index']);
Route::get('/post',[FrontEndController::class,'post']);


//dashboard page
Route::get('/dashboard',[FrontEndController::class,'dashboardShow'])->name('dashboard');


// auth
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');

Route::post('/register', [AuthController::class, 'processRegistration']);



Route::get('/login',[AuthController::class,'showLoginForm'])->name('login');
Route::post('/login',[AuthController::class,'processLogin'])->name('login');

Route::get('/profile',[AuthController::class,'profileShow'])->name('profile');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');



//categories route

Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
Route::get('/categories/add',[CategoryController::class,'create'])->name('categories.create');
Route::post('/categories/create',[CategoryController::class,'store'])->name('categories.store');
Route::get('/categories/{id}',[CategoryController::class,'show'])->name('categories.show');
Route::get('/categories/{id}/edit',[CategoryController::class,'edit'])->name('categories.edit');
Route::put('/categories/{id}/edit',[CategoryController::class,'update'])->name('categories.update');
Route::delete('/categories/{id}',[CategoryController::class,'delete'])->name('categories.delete');
