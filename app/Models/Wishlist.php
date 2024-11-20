<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\WishlistFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wishlist extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return WishlistFactory::new();
    }
}
