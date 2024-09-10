<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('message/send/{receiver}', [HomeController::class, 'sendMessage'])->name('message.send');

require __DIR__.'/auth.php';
