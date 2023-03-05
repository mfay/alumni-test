<?php

use Mfay\AlumniTest\SiteController;
use \Illuminate\Support\Facades\Route;
use Mfay\AlumniTest\Admin\AdminController;

Route::group(['prefix' => 'alumni'], function () {
    Route::get('/help', [SiteController::class, 'help'])->name('alumni.help');
});

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'cms5/alumni/custom/aob'], function () {
    Route::get('/index', [AdminController::class, 'index'])->name('alumni.admin.index');
});
