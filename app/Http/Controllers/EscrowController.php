<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SimulatedEscrow;
use Carbon\Carbon;  
use Illuminate\Support\Facades\Auth;
use App\Models\Escrow;

class EscrowController extends Controller
{
    public function buyerindex()
    {
        $escrows = SimulatedEscrow::where('buyer_id', auth()->id())->get();
        return view('buyer.escrows.view', compact('escrows'));
    }

    public function buyershow($id)
    {
        $escrow = SimulatedEscrow::where('id', $id)
            ->where('buyer_id', auth()->id())
            ->firstOrFail();

        return view('buyer.escrows.show', compact('escrow'));
    }

    public function sellerindex()
    {
        $escrows = SimulatedEscrow::where('seller_id', auth()->id())->get();
        return view('seller.escrows.view', compact('escrows'));
    }

    public function sellershow($id)
    {
        $escrow = SimulatedEscrow::where('id', $id)
            ->where('seller_id', auth()->id())
            ->firstOrFail();

        return view('seller.escrows.show', compact('escrow'));
    }

    public function buyercreate()
    {
        $sellers = \App\Models\User::where('role', 1)->get(); // 1 means seller
        return view('buyer.escrows.create', compact('sellers'));
    }
    

    // Store new escrow
    public function store(Request $request)
    {
        $request->validate([
            'seller_id' => 'required|exists:users,id',
            'amount' => 'required|numeric|min:1',
            'description' => 'required|string|max:1000',
            'delivery_date' => 'required|date|after:today',
        ]);
    
        $escrow = new SimulatedEscrow();
        $escrow->buyer_id = Auth::id();
        $escrow->seller_id = $request->seller_id;
        $escrow->amount = $request->amount;
        $escrow->description = $request->description;
        $escrow->delivery_date = $request->delivery_date;
        $escrow->status = 'pending';  // optional: depends on your schema
        $escrow->save();
    
        return redirect()->route('buyer.escrows.view')->with('success', 'New escrow created successfully!');
    }
    
    public function createEscrow(Request $request)
    {
        $request->validate([
            'seller_id' => 'required|exists:users,id',
            'amount' => 'required|numeric|min:1',
        ]);

        SimulatedEscrow::create([
            'buyer_id' => auth()->id(),
            'seller_id' => $request->seller_id,
            'amount' => $request->amount,
        ]);

        return back()->with('success', 'Escrow created successfully.');
    }

    public function markDelivered($id)
    {
        $escrow = SimulatedEscrow::where('id', $id)
            ->where('seller_id', auth()->id())
            ->firstOrFail();
    
        $escrow->delivery_time = now();
        $escrow->status = 'delivered'; // ← Add this line
        $escrow->save();
    
        return back()->with('success', 'Delivery marked successfully.');
    }
    
    public function releaseFunds($id)
    {
        $escrow = SimulatedEscrow::where('id', $id)
            ->where('seller_id', auth()->id())
            ->firstOrFail();

        $escrow->is_released = true;
        $escrow->save();

        return back()->with('success', 'Funds released successfully.');
    }
    public function confirmDelivery($id)
{
    $escrow = SimulatedEscrow::where('id', $id)
        ->where('buyer_id', auth()->id())
        ->firstOrFail();

    $escrow->is_confirmed = true;
    $escrow->is_released = true;
    $escrow->status = 'released'; // <-- ADD THIS LINE
    $escrow->save();

    return back()->with('success', 'Delivery confirmed and funds released.');
}

    public function autoRelease()
    {
        $escrows = SimulatedEscrow::where('is_released', false)
            ->whereNotNull('delivery_time')
            ->get();

        foreach ($escrows as $escrow) {
            if ($escrow->delivery_time->addHours(72)->isPast()) {
                $escrow->is_released = true;
                $escrow->save();
            }
        }

        return "Auto release completed.";
    }
}
