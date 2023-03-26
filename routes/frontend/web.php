<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/psychologys', [HomeController::class, 'doctor'])->name('doctors');
Route::get('/psychology-detail', [HomeController::class, 'doctor_detail'])->name('doctor_detail');
Route::get('/blogs', [HomeController::class, 'blog'])->name('blogs');
Route::get('/blog-detail', [HomeController::class, 'blog_detail'])->name('blog_detail');
Route::get('/topics', [HomeController::class, 'topic'])->name('topics');


