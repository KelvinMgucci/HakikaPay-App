<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerEscrowController extends Controller
{
    public function index(){
        return view('seller.escrows.view');
    }

    public function show(){
        return view('seller.escrows.show');
    }
}
