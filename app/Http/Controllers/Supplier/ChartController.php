<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChartController extends Controller
{
  //Apex chart
  public function apexChart(){
    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Charts & Maps"],["name" => "Apex"]
    ];
    return view('supplier.pages.chart-apex',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  //chartjs chart
  public function chartJs(){
    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Charts & Maps"],["name" => "Chartjs"]
    ];
    return view('supplier.pages.chart-chartjs',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  //Chartist chart
  public function chartist(){
    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Charts & Maps"],["name" => "Chartist"]
    ];
    return view('supplier.pages.chart-chartist',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  //Map 
  public function googleMap(){
    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Maps"],["name" => "Google Maps"]
    ];
    return view('supplier.pages.maps-google',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
}
