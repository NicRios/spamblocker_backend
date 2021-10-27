<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CommonController;
use App\Http\Controllers\Api\ServeyController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TwilioSMSController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(
    ['prefix' => 'v1'],
    function(){
        Route::post('/send-otp', [TwilioSMSController::class, 'sendOtp']);
        Route::post('/verify-otp', [TwilioSMSController::class, 'verify']);
        Route::post('/login',[AuthController::class, 'Login']);
        Route::post('/signup',[AuthController::class, 'signup']);
        Route::post('/checkmail',[AuthController::class, 'checkmail']);
        Route::post('/refresh-token',[UserController::class, 'refreshToken']);


        //servey



        Route::get('/get/states', [ServeyController::class, 'states']);
        Route::get('/get/companies', [ServeyController::class, 'companies']);
        Route::group(['middleware' => ['auth:api']], function () {
            Route::post('/servey/post', [ServeyController::class, 'serveysubmit']);
            Route::get('/get/max_blocking', [ServeyController::class, 'contactList']);


        });

        Route::post('/force/update',[ CommonController::class,'appVersion']);

    }
);
