<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index() {
        return view('admin.notifications.viewnotifications'); // View notifications page
    }
    public function markAsRead($id) {}
    public function delete($id) {}

    //Buyers
    public function buyerindex(){
        return view('buyer.notifications.view');
    }

    //Sellers Functions
    public function sellerindex(){
        return view('seller.notification.view');
    }


}
