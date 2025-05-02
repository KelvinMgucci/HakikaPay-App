<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    
    public function index() {
        return view('admin.settings.viewsettings'); // View settings page
    }
    public function update(Request $request) {}

    //Buyers
    
    public function buyerindex(){
        return view('buyer.settings.view');
    }


    // Sellers Functions
    public function sellerindex(){
        return view('seller.settings.view');
    }
    public function sellerupdate(){
        return view('seller.settings.update');
    }

}
