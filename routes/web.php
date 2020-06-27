<?php
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

// Frontend Routes
Route::name('frontend.')
    ->namespace('Frontend')
    ->group(__DIR__ . '/frontend.php');


// Supplier Routes
Route::name('supplier.')
    ->prefix('supplier')
    ->namespace('Supplier')
    ->group(__DIR__ . '/supplier.php');


// @todo: move all frontend routes into the frontend.php file.
Route::get('/', function () {
    View::addExtension('html','php');
    return View::make('index');
    // return view('home/app');
});
Route::resource('/task', 'TaskController');
Route::get('/homesearch',function(){
    return view('hotels/hotel_search');
});
//Route::get('/hotelcitylist','HomeController@hotelcitylist');


// Route::get('/','HomeController@index');
Route::get('autocompletesearch','HomeController@search');

Route::get('dashboard', function () {
    return view('dashboards');
});
Route::get('myaccount', function () {
    return view('myaccount');
});
Route::get('mybookings', function () {
    return view('mybookings');
});

Route::get('/activation', '\App\Http\Controllers\API\UserloginController@activation');
Route::get('/logout', '\App\Http\Controllers\API\UserloginController@logout');


Route::get('search','AutoCompleteController@index');
Route::get('autocomplete','AutoCompleteController@search');

Route::get('hotelsearch','HotelController@hotelsearchresult');
Route::get('getAmenities','HotelController@getAmenities');
Route::get('gethotelAmenities/{id}','HotelController@getHotelAmenities');
Route::get('imagetest','HotelController@getResultsThumbnail');

//Route::get('hoteldetail/{hotelid}','api\HotelController@hotelDetail');
Route::get('hoteldetail','HotelController@hotelDetail');
Route::get('gethoteldetail','HotelController@gethotelDetail');
Route::get('getsearchdata','HotelController@get_search_data');

Route::get('getroomdetail/','HotelController@getroomDetails');
Route::get('getroomAmenities/{id}','HotelController@getroomAmenities');
Route::get('getroomImages/{roomcode}','HotelController@get_hotel_room_image_by_code');


Route::get('personalinfo/',function(){
    return view('hotels/personal_details');
});

Route::post('userinfo/','PersonaldetailsController@saveuser');
Route::post('guestinfo/','PersonaldetailsController@saveguest');
