<?php

use Mfay\AlumniTest\SiteController;
use \Illuminate\Support\Facades\Route;

Route::get('/help', [SiteController::class, 'help'])->name('alumni.help');
