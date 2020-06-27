<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    // GridPage
    public function gridContent(){
      $pageConfigs = ['pageHeader' => true];
      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link"=>"#", "name"=>"Content"],["name"=>"Grid"]
      ];
      return view('supplier.pages.content-grid',["pageConfigs" => $pageConfigs, "breadcrumbs" => $breadcrumbs]);
    }
     // Typography 
     public function typographyContent(){
      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link"=>"#", "name"=>"Content"],["name"=>"Typography"]
      ];

      return view('supplier.pages.content-typography',["pageConfigs" => $pageConfigs, "breadcrumbs" => $breadcrumbs]);
    }
    // text Utilities
    public function textUtilitiesContent(){
      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link"=>"#", "name"=>"Content"],["name"=>"Text Utilities"]
      ];

      return view('supplier.pages.content-text-utilities',["pageConfigs" => $pageConfigs, "breadcrumbs" => $breadcrumbs]);
    }
    
    // content-syntax-highlighter
    public function contentSyntaxHighlighter(){
      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link"=>"#", "name"=>"Content"],["name" => "Syntax Highlighter"]
      ];

      return view('supplier.pages.content-syntax-highlighter',["pageConfigs" => $pageConfigs, "breadcrumbs" => $breadcrumbs]);
    }

     // content-helper-classes
     public function contentHelperClasses(){
      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link"=>"#", "name"=>"Content"],["name" => "Helper Classes"]
      ];

      return view('supplier.pages.content-helper-classes',["pageConfigs" => $pageConfigs, "breadcrumbs" => $breadcrumbs]);
    }
     // colors
     public function colorContent(){
      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["name" => "Colors"]
      ];

      return view('supplier.pages.colors',["pageConfigs" => $pageConfigs, "breadcrumbs" => $breadcrumbs]);
    }
}
