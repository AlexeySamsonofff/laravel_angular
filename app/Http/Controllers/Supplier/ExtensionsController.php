<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExtensionsController extends Controller
{
    //Extensions
    public function sweetAlert(){
      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Extensions"],["name" => "Sweet Alert"]
      ];
      return view('supplier.pages.ext-component-sweet-alerts',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
    }
    //Toastr
    public function toastr(){
      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Extensions"],["name" => "Toastr"]
      ];
      return view('supplier.pages.ext-component-toastr',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
    }
     //NouiSlider 
     public function noUiSlider(){
      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Extensions"],["name" => "noUiSlider"]
      ];
      return view('supplier.pages.ext-component-noui-slider',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
    }
    //NouiSlider 
    public function dragComponent(){
      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Extensions"],["name" => "Drag & Drop"]
      ];
      return view('supplier.pages.ext-component-drag-drop',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
    }
    //Tour 
    public function tourComponent(){
    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Extensions"],["name" => "Tour"]
    ];
    return view('supplier.pages.ext-component-tour',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  //Swiper 
  public function swiperComponent(){
    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Extensions"],["name" => "Swiper"]
    ];
    return view('supplier.pages.ext-component-swiper',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
   //treeview 
   public function treeviewComponent(){
    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Extensions"],["name" => "Treeview"]
    ];
    return view('supplier.pages.ext-component-treeview',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
   //Block UI 
   public function blockUIComponent(){
    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Extensions"],["name" => "Block-UI"]
    ];
    return view('supplier.pages.ext-component-block-ui',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  //Media Player 
  public function mediaComponent(){
    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Extensions"],["name" => "Media Player"]
    ];
    return view('supplier.pages.ext-component-media-player',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  //Miscellaneous 
  public function miscellaneous(){
    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Extensions"],["name" => "Miscellaneous"]
    ];
    return view('supplier.pages.ext-component-miscellaneous',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
   //i18n 
   public function i18n(){
    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Extensions"],["name" => "i18n"]
    ];
    return view('supplier.pages.ext-component-i18n',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
}
