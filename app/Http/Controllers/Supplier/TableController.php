<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableController extends Controller
{
  //Basic Tables
  public function basicTable(){
    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["name" => "Bootstrap Tables"]
    ];
    return view('supplier.pages.table',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
    //extended table
    public function extendedTable(){
      $pageConfigs = ['pageHeader' => true];
      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["name" => "Bootstrap Tables Extended"]
      ];
      return view('supplier.pages.table-extended',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
   //datatable
   public function dataTable(){
    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["name" => "Datatable"]
    ];
    return view('supplier.pages.table-datatable',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
}
