<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TestimonyController;
use App\Http\Controllers\Admin\PyschologyController;
use App\Http\Controllers\Admin\PyschologyOrderController;

Route::prefix('admin')->group(function () {
    
    Route::middleware('guest')->group(function () {
        //login
        Route::get('/login', AuthController::class . '@index');
        Route::post('/login', AuthController::class . '@authentication')->name('login');
    });
 
    
    Route::middleware('auth')->group(function () {
        Route::get('/logout', AuthController::class . '@logout')->name('logout');
        //dashboard
        Route::get('/', DashboardController::class . '@index')->name('admin.dashboard.index');

        // pyschology order
        Route::get('/pyschology-order', PyschologyOrderController::class . '@index')->name('admin.pyschology-order.index');
        Route::get('/pyschology-order-create', PyschologyOrderController::class . '@create')->name('admin.pyschology-order.create');

        // article
        // export data
        // pyschology
        Route::get('/pyschology', PyschologyController::class . '@index')->name('admin.pyschology.index');

        // testimony
        Route::get('/testimony', TestimonyController::class . '@index')->name('admin.testimony.index');

        //faq
        Route::get('/faq', FaqController::class . '@index')->name('admin.faq.index');
        Route::get('/faq/create', FaqController::class . '@create')->name('admin.faq.create');
        Route::post('/faq/create', FaqController::class . '@store')->name('admin.faq.store');
        Route::get('/faq/update/{id}', FaqController::class . '@edit')->name('admin.faq.edit');
        Route::patch('/faq/update/{id}', FaqController::class . '@update')->name('admin.faq.update');
        Route::delete('/faq/delete/{id}', FaqController::class . '@destroy')->name('admin.faq.delete');

        //faq
        Route::get('/article', ArticleController::class . '@index')->name('admin.article.index');
        Route::get('/article/create', ArticleController::class . '@create')->name('admin.article.create');
        Route::post('/article/create', ArticleController::class . '@store')->name('admin.article.store');
        Route::get('/article/update/{id}', ArticleController::class . '@edit')->name('admin.article.edit');
        Route::patch('/article/update/{id}', ArticleController::class . '@update')->name('admin.article.update');
        Route::delete('/article/delete/{id}', ArticleController::class . '@destroy')->name('admin.article.delete');

        // user
        Route::get('/user', UserController::class . '@index')->name('admin.user.index');
        Route::get('/user/create', UserController::class . '@create')->name('admin.user.create');
        Route::post('/user/create', UserController::class . '@store')->name('admin.user.store');
        Route::get('/user/update/{id}', UserController::class . '@edit')->name('admin.user.edit');
        Route::patch('/user/update/{id}', UserController::class . '@update')->name('admin.user.update');
        Route::delete('/user/delete/{id}', UserController::class . '@destroy')->name('admin.user.delete');
        Route::get('/user/edit-profile', UserController::class . '@editProfile')->name('admin.user.edit-profile');
        Route::patch('/user/edit-profile', UserController::class . '@updateProfile')->name('admin.user.update-profile');
        Route::patch('/user/change-password', UserController::class . '@changePassword')->name('admin.user.change-password');

        // setting
        Route::get('/setting', SettingController::class . '@index')->name('admin.setting.index');
        
    });
   
    

  
   
   
   
  
  
    
});
