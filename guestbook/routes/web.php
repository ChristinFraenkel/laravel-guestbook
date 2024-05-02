<?php

use App\Controller\IndexController;
use Illuminate\Support\Facades\Route;

Route::match(['GET', 'POST'], '/', [IndexController::class, 'indexAction'])->name('index');
