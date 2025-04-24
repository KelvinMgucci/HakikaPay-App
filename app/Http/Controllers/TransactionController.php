<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {
        return view('admin.transactions.viewtransactions'); // View transactions page
    }
    public function store(Request $request) {}
    public function show($id) {}
    public function refund($id) {}


    //Buyers
    public function buyerindex(){
        return view('buyer.transactions.view');
    }

    public function buyershow(){
        return view('buyer.transactions.wallet');
    }
}

