<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')
    ->group(function () {
        Route::controller(CategoryController::class)
            ->prefix('categories')
            ->group(function () {
                Route::get('', 'index');
            });

        Route::controller(BrandController::class)
            ->prefix('brands')
            ->group(function () {
                Route::get('', 'index');
                Route::post('', 'store');
                Route::put('/{id}', 'update')->where('id', '[0-9]+');
                Route::delete('/{id}', 'delete')->where('id', '[0-9]+');
            });

        Route::controller(AuthController::class)
            ->prefix('auth')
            ->group(function () {
                Route::post('login', 'login');
                Route::post('me', 'me');
                Route::post('refresh', 'refresh');
                Route::post('logout', 'logout');
            });
    });