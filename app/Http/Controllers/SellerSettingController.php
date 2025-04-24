<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerSettingController extends Controller
{
    public function index(){
        return view('seller.settings.view');
    }

    public function update(){
        return view('seller.settings.udpate');
    }
}
