<?php

    use App\Http\Controllers\UserController;
    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return response()->json([
            'message' => 'Welcome to the API',
        ]);
    });

    Route::controller(UserController::class)->prefix('users')->group(function () {
        Route::get('all', 'index');
        Route::post('store', 'store');
    });
