<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/', [TestController::class, 'home'])->name('home');

Route::get('/admin', [TestController::class, 'admin'])->name('admin');

Route::get('/feedback', [TestController::class, 'home']);

Route::post('/feedback/check', [TestController::class, 'feedback_check']);

Route::get('/feedback/delete/{id}', [TestController::class, 'feedback_delete'])->name('feedback_delete');

Route::get('/feedback/{id}/modify', [TestController::class, 'feedback_modify'])->name('feedback_modify');

Route::post('/feedback/{id}/modify', [TestController::class, 'feedback_modify_submit'])->name('feedback_modify_submit');