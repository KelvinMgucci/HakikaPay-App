<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerDeliveryController extends Controller
{
    public function index(){
        return view('seller.orders.orders');
    }

    public function update(){
        return view('seller.orders.update');
    }
}
