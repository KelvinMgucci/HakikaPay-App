<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerPayoutController extends Controller
{
    public function index(){
        return view('seller.payouts.view');
    }

    public function update(){
        return view('seller.payouts.update');
    }
}
