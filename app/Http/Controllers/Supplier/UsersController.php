<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
  //user List 
  public function listUser(){
    return view('supplier.pages.page-users-list');
  }
    //user view 
    public function viewUser(){
    return view('supplier.pages.page-users-view');
  }
   //user edit 
   public function editUser(){
    return view('supplier.pages.page-users-edit');
  }
}
