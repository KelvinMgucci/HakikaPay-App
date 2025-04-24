<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisputeController extends Controller
{
    public function index() {
        return view('admin.disputes.viewdisputes'); // View disputes page
    }
    public function create(Request $request) {}
    public function resolve(Request $request, $id = null) {
        return view('admin.disputes.solvedisputes'); // Solve disputes page
}

//Buyers

public function buyerindex(){
    return view('buyer.disputes.view');
}

public function buyershow(){
    return view('buyer.disputes.show');
}

}