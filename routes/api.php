<?php

    use Illuminate\Support\Facades\Route;

    Route::controller('UserController')->prefix('user')->group(function () {
        Route::get('all', 'index');
        Route::get('store', 'store');
    });
