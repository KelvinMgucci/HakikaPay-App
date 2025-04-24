<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerNotificationController extends Controller
{
    public function index(){
        return view('seller.notification.view');
    }

}
