<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\WishFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wish extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'url', 'price', 'wishlist_id'];

    protected static function newFactory()
    {
        return WishFactory::new();
    }
}
