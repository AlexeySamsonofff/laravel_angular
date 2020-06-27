<?php

use Illuminate\Http\Request;

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
Route::group(['prefix' => 'v1','namespace' => 'API'], function(){
    Route::apiResource('employees', 'EmployeeController');
});

// Route::group(['prefix' => 'v1','namespace' => 'API'], function(){
//     Route::apiResource('hotels', 'HotelController');
// });

Route::group(['prefix' => 'v1','namespace' => 'API'], function(){
    Route::apiResource('users', 'UserController');  
});

Route::group(['prefix' => 'v1','namespace' => 'API'], function(){
    Route::apiResource('login', 'UserloginController');  
});


Route::group(['prefix' => 'v1','namespace' => 'API'], function(){
    Route::apiResource('forgotpassword', 'ForgotpasswordController');  
});

Route::group(['prefix' => 'v1','namespace' => 'API'], function(){
    Route::apiResource('newsletter', 'NewsletterController');  
});

Route::group(['prefix' => 'v1','namespace' => 'API'], function(){
    Route::apiResource('myaccount', 'MyaccountController');  
});

Route::group(['prefix' => 'v1','namespace' => 'API'], function(){
    Route::apiResource('bookings', 'BookingsController');  
});

Route::group(['prefix' => 'v1'], function(){
    Route::apiResource('hotels', 'HotelController');
});



