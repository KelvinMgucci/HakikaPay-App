<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Escrow;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    // Admin: View all deliveries
    public function listAll()
    {
        $deliveries = Delivery::with('escrow')->get();
        return view('admin.delivery.manage', compact('deliveries'));
    }

    // Admin: Track a specific delivery
    public function track()
    {
        return view('admin.delivery.track');
    }

    // Admin: Update status of a delivery
    public function updateStatus(Request $request, $id)
    {
        $delivery = Delivery::findOrFail($id);
        $request->validate([
            'status' => 'required|in:processing,shipped,delivered,cancelled',
            'tracking_info' => 'nullable|string',
        ]);

        $delivery->update([
            'status' => $request->status,
            'tracking_info' => $request->tracking_info,
        ]);

        return back()->with('success', 'Delivery status updated.');
    }

    public function buyerindex(){
        return view('buyer.orders.view');
    }

    public function buyershow(){
        return view('buyer.orders.show');
    }


}
