<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $wishlists = Wishlist::where('user_id', auth()->user()->id)->get();

        return view('index', [
            'wishlists' => $wishlists,
        ]);
    }
}
