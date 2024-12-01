<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(Wishlist $wishlist)
    {
        return view('wishlist', ['wishlist' => $wishlist]);
    }
}
