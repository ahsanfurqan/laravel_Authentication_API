<?php

use App\Http\Controllers\Api\NewPasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForgotPasswordAPIController;
use App\Http\Controllers\ResetPasswordAPIController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register',[UserController::class,'register'])->name('register');
Route::post('Login',[UserController::class,'login'])->name('login');
Route::post('password/email',[ForgotPasswordAPIController::class,'sendResetLinkEmail'])->name('password.email');
Route::post('password/reset',[ResetPasswordAPIController::class,'reset']);
Route::get('password/reset/{token}', [ResetPasswordAPIController::class,'ShowResetForm'])->name('password.reset');
