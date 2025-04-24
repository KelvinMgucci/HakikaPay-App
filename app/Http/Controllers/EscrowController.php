<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escrow;

class EscrowController extends Controller
{
    /**
     * Display a listing of the seller's escrows.

     * Release funds from escrow (admin only).
     */
    public function release($id)
    {
        $escrow = Escrow::findOrFail($id);

        // Add your fund release logic here...

        return view('admin.transactions.releasefund', compact('escrow'));
    }
    
    public function buyerindex(){
        return view('buyer.escrows.view');
    }

    public function buyershow(){
        return view('buyer.escrows.show');
    }
}
