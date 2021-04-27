<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/logged-in', function () {
    if (auth()->user()->hasRole('admin')) {
        return redirect('/admin/dashboard');
    } elseif (auth()->user()->hasRole('sales')) {
        return redirect('/employee/dashboard');
    } else {
        return redirect('/');
    }
})->middleware(['auth'])->name('logged-in');

Route::get('customers', [CustomerController::class, 'index'])->middleware(['auth'])->name('customers.index');
Route::resource('customers', CustomerController::class)->middleware(['auth']);

require __DIR__.'/auth.php';

require __DIR__.'/admin.php';