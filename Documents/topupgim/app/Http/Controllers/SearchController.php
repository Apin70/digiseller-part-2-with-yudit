<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->query('keyword');
        // Future: implement search logic against products DB or API
        return view('search', compact('keyword'));
    }
}
