<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Models\Supplier\HotelList;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    // Hotel List
    public function listHotel()
    {
        $pageConfigs = ['pageHeader' => true];

        $breadcrumbs = [
            ["link" => "/", "name" => "Home"],["name" => "Hotels"],["name" => "Hotel List"]
        ];

        $data = [
            'pageConfigs'=>$pageConfigs,
            'breadcrumbs'=>$breadcrumbs,
            'hotelList' => HotelList::all(),
            'hotelRatings' => HotelList::orderBy('hotel_star_rating','asc')->distinct('hotel_star_rating')->pluck('hotel_star_rating'),
            'hotelStatuses' => HotelList::orderBy('status','desc')->distinct('status')->pluck('status')
        ];

        return view('supplier.pages.hotel.list', $data);
    }

    // Hotel Add
    public function addHotel()
    {
        $pageConfigs = ['pageHeader' => true];

        $breadcrumbs = [
            ["link" => "/", "name" => "Home"],["name" => "Hotels"],["name" => "Add Hotel"]
        ];

        $data = [
            'pageConfigs'=>$pageConfigs,
            'breadcrumbs'=>$breadcrumbs
        ];

        return view('supplier.pages.hotel.form', $data);
    }

    //user edit
    public function editUser()
    {
        return view('supplier.pages.page-users-edit');
    }
}
