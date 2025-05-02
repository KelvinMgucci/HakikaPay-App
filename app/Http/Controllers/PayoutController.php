<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayoutController extends Controller
{
    public function requestPayout(Request $request) {}
    public function approve($id) {}
    public function reject($id) {}
    public function history() {
        return view('admin.payouts.viewpayouts'); // View payouts page
    }

    //seller functions
    public function sellerindex(){
        return view('seller.payouts.view');
    }

    public function sellerupdate(){
        return view('seller.payouts.update');
}
}