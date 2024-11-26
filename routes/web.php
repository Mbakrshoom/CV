<?php

use App\Http\Controllers\UserContrller;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [UserContrller::class, 'index'])->name('home');


Route::get('/about', [UserContrller::class, 'about'])->name('about');

Route::get('/resume', [UserContrller::class, 'resume'])->name('resume');

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/projects', [UserContrller::class, 'projectDetails'])->name('project');



