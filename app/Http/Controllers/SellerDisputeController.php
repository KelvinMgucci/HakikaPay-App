<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerDisputeController extends Controller
{
    public function index(){
        return view('seller.disputes.view');
    }

    public function create(){
        return view('seller.disputes.create');
    }
}
