<?php

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
Route::controller(RegisterController::class)->group(function(){
    Route::post('register','register');
    // Route::post('login','login');
    // // Must Use Middleware To Check Is Login Becouse To Remove Token
    // Route::post('logout','logout')->middleware('auth:sanctum');
});