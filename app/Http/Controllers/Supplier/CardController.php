<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardController extends Controller
{
    // card basic
    public function basicCard(){
      
      $pageConfigs = ['pageHeader' => true];
      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Card"],["name" => "Basic Card"]
      ];
      return view('supplier.pages.card-basic',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
    }

    // card basic
    public function actionCard(){

    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Card"],["name" => "Card Actions"]
    ];
    return view('supplier.pages.card-actions',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  // widgets
  public function widgets(){

    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["name" => "Widgets"]
    ];
    return view('supplier.pages.widgets',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
}
