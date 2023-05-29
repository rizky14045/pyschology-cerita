<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/psychologist', [HomeController::class, 'doctor'])->name('doctors');
Route::get('/psychology-detail/{id}', [HomeController::class, 'doctor_detail'])->name('doctor_detail');
Route::get('/articles', [HomeController::class, 'blog'])->name('blogs');
Route::get('/article/{slug}', [HomeController::class, 'blog_detail'])->name('blog_detail');
Route::get('/topics', [HomeController::class, 'topic'])->name('topics');
Route::get('/about-us', [HomeController::class, 'about_us'])->name('about-us');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/syarat-ketentuan', [HomeController::class, 'termCondition'])->name('syarat-ketentuan');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');



