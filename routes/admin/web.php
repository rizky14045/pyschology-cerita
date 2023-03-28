<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ProductController;
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

        // pyschology
        Route::get('/pyschology', PyschologyController::class . '@index')->name('admin.pyschology.index');

       
        //Testimony
        Route::get('/testimony', TestimonyController::class . '@index')->name('admin.testimony.index');
        Route::get('/testimony/create', TestimonyController::class . '@create')->name('admin.testimony.create');
        Route::post('/testimony/create', TestimonyController::class . '@store')->name('admin.testimony.store');
        Route::get('/testimony/update/{id}', TestimonyController::class . '@edit')->name('admin.testimony.edit');
        Route::patch('/testimony/update/{id}', TestimonyController::class . '@update')->name('admin.testimony.update');
        Route::delete('/testimony/delete/{id}', TestimonyController::class . '@destroy')->name('admin.testimony.delete');
        //faq
        Route::get('/faq', FaqController::class . '@index')->name('admin.faq.index');
        Route::get('/faq/create', FaqController::class . '@create')->name('admin.faq.create');
        Route::post('/faq/create', FaqController::class . '@store')->name('admin.faq.store');
        Route::get('/faq/update/{id}', FaqController::class . '@edit')->name('admin.faq.edit');
        Route::patch('/faq/update/{id}', FaqController::class . '@update')->name('admin.faq.update');
        Route::delete('/faq/delete/{id}', FaqController::class . '@destroy')->name('admin.faq.delete');

        //Topic
        Route::get('/topic', TopicController::class . '@index')->name('admin.topic.index');
        Route::get('/topic/create', TopicController::class . '@create')->name('admin.topic.create');
        Route::post('/topic/create', TopicController::class . '@store')->name('admin.topic.store');
        Route::get('/topic/update/{id}', TopicController::class . '@edit')->name('admin.topic.edit');
        Route::patch('/topic/update/{id}', TopicController::class . '@update')->name('admin.topic.update');
        Route::delete('/topic/delete/{id}', TopicController::class . '@destroy')->name('admin.topic.delete');

        //Product
        Route::get('/product', ProductController::class . '@index')->name('admin.product.index');
        Route::get('/product/create', ProductController::class . '@create')->name('admin.product.create');
        Route::post('/product/create', ProductController::class . '@store')->name('admin.product.store');
        Route::get('/product/update/{id}', ProductController::class . '@edit')->name('admin.product.edit');
        Route::patch('/product/update/{id}', ProductController::class . '@update')->name('admin.product.update');
        Route::delete('/product/delete/{id}', ProductController::class . '@destroy')->name('admin.product.delete');

        //article
        Route::get('/article', ArticleController::class . '@index')->name('admin.article.index');
        Route::get('/article/create', ArticleController::class . '@create')->name('admin.article.create');
        Route::post('/article/create', ArticleController::class . '@store')->name('admin.article.store');
        Route::get('/article/update/{id}', ArticleController::class . '@edit')->name('admin.article.edit');
        Route::patch('/article/update/{id}', ArticleController::class . '@update')->name('admin.article.update');
        Route::delete('/article/delete/{id}', ArticleController::class . '@destroy')->name('admin.article.delete');
        Route::post('/article/upload-image', ArticleController::class . '@uploadImage')->name('admin.article.upload');
        
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

        //Settings
        Route::get('/settings/general', SettingController::class . '@general')->name('admin.settings.general.index');
        Route::post('/settings/general', SettingController::class . '@generalStore')->name('admin.settings.general.store');
        Route::get('/settings/social-link', SettingController::class . '@socialLink')->name('admin.settings.social-link.index');
        Route::post('/settings/social-link', SettingController::class . '@socialLinkStore')->name('admin.settings.social-link.store');
        
    });
   
    

  
   
   
   
  
  
    
});
