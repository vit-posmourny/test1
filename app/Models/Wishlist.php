<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\WishlistFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wishlist extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return WishlistFactory::new();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function wishes(): HasMany
    {
        return $this->hasMany(Wish::class);
    }
}
