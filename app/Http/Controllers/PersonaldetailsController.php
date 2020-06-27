<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelBookingPassengersInfo;
use App\Models\UserInfo;
class PersonaldetailsController extends Controller
{
    //
    public function saveuser(Request $request)
    {

            $userInfo = new UserInfo();
            $userInfo->first_name = $request->input('firstname');
            $userInfo->last_name = $request->input('lastname');
            $userInfo->address = $request->input('billing_address');
            $userInfo->pin_code = $request->input('postalcode');
            $userInfo->country = $request->input('country');
            $userInfo->state = $request->input('state');
            $userInfo->city = $request->input('city');
            $userInfo->user_email = $request->input('email');
            $userInfo->mobile_no = $request->input('mobile');
            $userInfo->user_password = 'yamuna';
            $userInfo->user_no = 'VM1632721';
            $userInfo->activation_key = 'testtest';
            $userInfo->save();
    }
    public function saveguest(Request $request)
    {
            $guestInfo = new HotelBookingPassengersInfo();
            $guestInfo->uniqueRefNo = 'VMNXZHJVZZ1';
            $guestInfo->passenger_type = 'adult';
            $guestInfo->title = $request->input('title');
            $guestInfo->first_name = $request->input('firstname');
            $guestInfo->last_name = $request->input('lastname');
            $guestInfo->save();
    }
}
