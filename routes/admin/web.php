<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\HeaderController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TestimonyController;
use App\Http\Controllers\Admin\PsychologyController;
use App\Http\Controllers\Admin\TermConditionController;
use App\Http\Controllers\Admin\PsychologyOrderController;

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

        // psychology order
        Route::get('/psychology-order', PsychologyOrderController::class . '@index')->name('admin.psychology-order.index');
        Route::get('/psychology-order-choose', PsychologyOrderController::class . '@choose')->name('admin.psychology-order.choose');  
        Route::get('/psychology-order-create/{id}', PsychologyOrderController::class . '@create')->name('admin.psychology-order.create');  
        Route::post('/psychology-order-create', PsychologyOrderController::class . '@store')->name('admin.psychology-order.store');
        Route::get('/psychology-order-update/{session}', PsychologyOrderController::class . '@edit')->name('admin.psychology-order.edit');  
        Route::patch('/psychology-order-update/{session}', PsychologyOrderController::class . '@update')->name('admin.psychology-order.update');  
        Route::get('/psychology-order-reschedule/{session}', PsychologyOrderController::class . '@reschedule')->name('admin.psychology-order.reschedule');  
        Route::patch('/psychology-order-reschedule/{session}', PsychologyOrderController::class . '@rescheduleSave')->name('admin.psychology-order.reschedule-save');  
        Route::get('/psychology-order-extended/{session}', PsychologyOrderController::class . '@extended')->name('admin.psychology-order.extended');   
        Route::patch('/psychology-order-extended/{session}', PsychologyOrderController::class . '@extendedSave')->name('admin.psychology-order.extended-save');
        Route::patch('/psychology-order-finish/{session}', PsychologyOrderController::class . '@finish')->name('admin.psychology-order.finish');
        Route::delete('/psychology-order-delete/{session}', PsychologyOrderController::class . '@destroy')->name('admin.psychology-order.delete');
        
        //Psychology
        Route::get('/psychology', PsychologyController::class . '@index')->name('admin.psychology.index');
        Route::get('/psychology/create', PsychologyController::class . '@create')->name('admin.psychology.create');
        Route::post('/psychology/create', PsychologyController::class . '@store')->name('admin.psychology.store');
        Route::get('/psychology/update/{id}', PsychologyController::class . '@edit')->name('admin.psychology.edit');
        Route::patch('/psychology/update/{id}', PsychologyController::class . '@update')->name('admin.psychology.update');
        Route::delete('/psychology/delete/{id}', PsychologyController::class . '@destroy')->name('admin.psychology.delete');

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

        //termcondition
        Route::get('/term-condition', TermConditionController::class . '@index')->name('admin.term-condition.index');
        Route::get('/term-condition/create', TermConditionController::class . '@create')->name('admin.term-condition.create');
        Route::post('/term-condition/create', TermConditionController::class . '@store')->name('admin.term-condition.store');
        Route::get('/term-condition/update/{id}', TermConditionController::class . '@edit')->name('admin.term-condition.edit');
        Route::patch('/term-condition/update/{id}', TermConditionController::class . '@update')->name('admin.term-condition.update');
        Route::delete('/term-condition/delete/{id}', TermConditionController::class . '@destroy')->name('admin.term-condition.delete');

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

        //header
        Route::get('/header', HeaderController::class . '@index')->name('admin.header.index');
        Route::get('/header/create', HeaderController::class . '@create')->name('admin.header.create');
        Route::post('/header/create', HeaderController::class . '@store')->name('admin.header.store');
        Route::get('/header/update/{id}', HeaderController::class . '@edit')->name('admin.header.edit');
        Route::patch('/header/update/{id}', HeaderController::class . '@update')->name('admin.header.update');
        Route::delete('/header/delete/{id}', HeaderController::class . '@destroy')->name('admin.header.delete');

        //album
        Route::get('/album', AlbumController::class . '@index')->name('admin.album.index');
        Route::get('/album/create', AlbumController::class . '@create')->name('admin.album.create');
        Route::post('/album/create', AlbumController::class . '@store')->name('admin.album.store');
        Route::get('/album/update/{id}', AlbumController::class . '@edit')->name('admin.album.edit');
        Route::patch('/album/update/{id}', AlbumController::class . '@update')->name('admin.album.update');
        Route::delete('/album/delete/{id}', AlbumController::class . '@destroy')->name('admin.album.delete');

        //Price
        Route::get('/price', PriceController::class . '@index')->name('admin.price.index');
        Route::get('/price/create', PriceController::class . '@create')->name('admin.price.create');
        Route::post('/price/create', PriceController::class . '@store')->name('admin.price.store');
        Route::get('/price/update/{id}', PriceController::class . '@edit')->name('admin.price.edit');
        Route::patch('/price/update/{id}', PriceController::class . '@update')->name('admin.price.update');
        Route::delete('/price/delete/{id}', PriceController::class . '@destroy')->name('admin.price.delete');

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


        //Ajax

        Route::get('/psychology-order-get-minute/{start}/{end}', PsychologyOrderController::class . '@getMinute')->name('admin.psychology-order.get-minute');   
        Route::get('/psychology-order-get-price/{id}/{number}', PsychologyOrderController::class . '@getPrice')->name('admin.psychology-order.get-price');   
        
    });
   
    

  
   
   
   
  
  
    
});
