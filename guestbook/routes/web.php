<?php

use App\Controller\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'indexAction'])->name('index');
Route::post('/', [IndexController::class, 'saveAction'])->name('saveEntry');
