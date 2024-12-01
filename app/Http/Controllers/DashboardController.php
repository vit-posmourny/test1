<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        return view('index', [
            'wishlists' => auth()->user()->wishlists
        ]);
    }
}
