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

}
