<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //ecommerce
    public function dashboardEcommerce(){
        return view('supplier.pages.dashboard-ecommerce');
    }
    // analystic
    public function dashboardAnalytics(){
        return view('supplier.pages.dashboard-analytics');
    }
}
