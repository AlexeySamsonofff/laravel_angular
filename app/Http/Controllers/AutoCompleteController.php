<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JamaicanCityList;

class AutoCompleteController extends Controller
{
    //
    public function index()
    {
        return view('jqueryAutocomplete.search');
    }
    public function search(Request $request)
    {
        $search=$request->get('term');
        $search="arg";
        $result=JamaicanCityList::where('city_name','like','%'.$search.'%')->get();
        return response()->json($result);
    }
}
