<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::group([
    'prefix' => 'admin', 'as' => 'admin.',
    'middleware' => ['auth', 'verified', 'role:admin']
], function () {
    Route::get('dashboard', HomeController::class)->name('dashboard');
});
