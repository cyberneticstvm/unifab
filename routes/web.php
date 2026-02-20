<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::prefix('')->controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('about-us', 'about_us')->name('about');
        Route::get('csr', 'csr')->name('csr');
        Route::get('contact-us', 'contact_us')->name('contact');
    });
});
