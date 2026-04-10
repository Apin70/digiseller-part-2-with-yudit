<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function recents()
    {
        // Requires auth in real implementation
        return redirect()->route('auth.sign-in');
    }

    public function orderStatus()
    {
        return redirect()->route('auth.sign-in');
    }
}
