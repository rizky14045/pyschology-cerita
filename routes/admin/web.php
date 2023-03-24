<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TestimonyController;
use App\Http\Controllers\Admin\PyschologyController;
use App\Http\Controllers\Admin\PyschologyOrderController;

Route::prefix('admin')->group(function () {
    
    // index

    Route::get('/', DashboardController::class . '@index')->name('admin..dashboard.index');
    Route::get('/pyschology', PyschologyController::class . '@index')->name('admin.pyschology.index');
    Route::get('/testimony', TestimonyController::class . '@index')->name('admin.testimony.index');
    Route::get('/user', UserController::class . '@index')->name('admin.user.index');
    Route::get('/setting', SettingController::class . '@index')->name('admin.setting.index');
    Route::get('/pyschology-order', PyschologyOrderController::class . '@index')->name('admin.pyschology-order.index');

    //create
    Route::get('/pyschology-order-create', PyschologyOrderController::class . '@create')->name('admin.pyschology-order.create');

    //post

    //edit

    //update


    //delete
    
});
