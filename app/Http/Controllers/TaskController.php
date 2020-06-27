<?php

namespace App\Http\Controllers;
use App\Models\HolidayCity;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function index()
    {
        $tasks = HolidayCity::all();
        return response()->json([
            'tasks' => $tasks,
        ], 200);
    }
}
