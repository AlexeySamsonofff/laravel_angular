<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JamaicanCityList;
use DB;
class HomeController extends Controller
{
    //
    public function index(){
        return view('home.app');
    }

    public function search(Request $request)
    {
        $search=$request->get('term');
        //$search="bam";
        $result=JamaicanCityList::where('city_name','like','%'.$search.'%')->get();
        return response()->json($result);
    }
}
