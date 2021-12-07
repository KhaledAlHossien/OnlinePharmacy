<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\MidController;
use App\Http\Controllers\ordertroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" Middleware group. Now create something great!
|
 */

Route::get('/', [MidController::class, 'index']);

Route::get('/mid/create', [MidController::class, 'create']);

Route::post('/mid', [MidController::class, 'store']);

Route::get('/mid/{id}', [MidController::class, 'show']);

Route::get('/mid/{id}/edit', [AccountController::class, 'edit']);

Route::put('/mid/{id}', [AccountController::class, 'update']);

Route::get('/mid/{id}/delete', [MidController::class, 'destroy']);

Route::get('/pages/login', function () {
    return view('/pages/login');
});

Route::get('/pages/register', function () {
    return view('/pages/register');
});

Route::get('/pages/about', function () {
    return view('/pages/about');
});

Route::get('/admin', [AccountController::class, 'index']);

Route::get('/admin/index_admin', [AccountController::class, 'index_admin']);

Route::get('/pages/{id}/order', [ordertroller::class, 'show']);

Route::post('/order', [ordertroller::class, 'store']);

Route::get('/pages/{id}/delete', [ordertroller::class, 'destroy']);

Route::get('/pages/search', [MidController::class, 'search']);

Route::get('/admin/search_admin', [AccountController::class, 'search']);

Route::get('/pages/illness', [MidController::class, 'illness']);

Auth::routes();
