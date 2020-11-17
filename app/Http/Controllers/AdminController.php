<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Command;
class AdminController extends Controller
{

    public function index()
    {
        return view('admin.dashboard');
    }

   public function newOrders()
   {
    
   }

   public function OrdersNotDelivred()
   {

   }
}
