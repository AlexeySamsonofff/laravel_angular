<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    // Alert Componenet
    public function alertComponenet(){

      $pageConfigs = ['pageHeader' => true];
      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "Alerts"]
      ];
      return view('supplier.pages.component-alerts',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
    }

     // buttons Componenet
     public function buttonComponenet(){

      $pageConfigs = ['pageHeader' => true];
      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "Buttons"]
      ];
      return view('supplier.pages.component-buttons-basic',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
    }

    // buttons Componenet
    public function breadcrumbsComponenet(){

    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "Breadcrumbs"]
    ];
    return view('supplier.pages.component-breadcrumbs',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
   // buttons Componenet
   public function carouselComponenet(){

    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "Carousel"]
    ];
    return view('supplier.pages.component-carousel',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }

  // collapse Componenet
  public function collapseComponenet(){

    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "Carousel"]
    ];
    return view('supplier.pages.component-collapse',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  // dropdown Componenet
  public function dropdownComponenet(){

    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "Dropdowns"]
    ];
    return view('supplier.pages.component-dropdowns',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  // listgroup Componenet
  public function listGroupComponenet(){

    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "List Group"]
    ];
    return view('supplier.pages.component-list-group',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  // modal Componenet
  public function modalComponenet(){

    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "Modal"]
    ];
    return view('supplier.pages.component-modals',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  // pagination Componenet
  public function paginationComponenet(){

    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "Pagination"]
    ];
    return view('supplier.pages.component-pagination',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  // navbar Componenet
  public function navbarComponenet(){

    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "Navs"]
    ];
    return view('supplier.pages.component-navbar',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  // navbar Componenet
  public function tabsComponenet(){

    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "Navs"]
    ];
    return view('supplier.pages.component-tabs-component',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  // pill Componenet
  public function pillComponenet(){

    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "Pills"]
    ];
    return view('supplier.pages.component-pills-component',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  // tooltips Componenet
  public function tooltipsComponenet(){

    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "Tooltip"]
    ];
    return view('supplier.pages.component-tooltips',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  // popovers Componenet
  public function popoversComponenet(){

    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "Popovers"]
    ];
    return view('supplier.pages.component-popovers',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
   // badges Componenet
   public function badgesComponenet(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "Badges"]
    ];
    return view('supplier.pages.component-badges',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }

   // Pill Badges Componenet
   public function pillBadgesComponenet(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "Pill Badges"]
    ];
    return view('supplier.pages.component-pill-badges',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  // Progress Componenet
  public function progressComponenet(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "Progress"]
    ];
    return view('supplier.pages.component-progress',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  // media object Componenet
  public function mediaObjectComponenet(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "Media Objects"]
    ];
    return view('supplier.pages.component-media-objects',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  // spinner Componenet
  public function spinnerComponenet(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "Spinner"]
    ];
    return view('supplier.pages.component-spinner',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  // Toasts Componenet
  public function toastsComponenet(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Components"],["name" => "Toasts"]
    ];
    return view('supplier.pages.component-bs-toast',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
}
