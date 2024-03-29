<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//----------------------------------------- {Auth Module}
Route::post('register',[RegisterController::class,'register']);
Route::post('login',[LoginController::class,'login']);

Route::middleware(['auth:sanctum'])->group(function(){
    Route::post('email-verification',[EmailVerificationController::class,'email_verification']);
    Route::get('email-verification',[EmailVerificationController::class,'sendEmailVerification']);
});