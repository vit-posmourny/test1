<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Wish;
use App\Models\Wishlist;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create()->each(function ($user){
            Wishlist::factory(2)->create(['user_id' => $user->id])->each(function ($wishlist){
               $wish = Wish::factory(5)->create(['wishlist_id' => $wishlist->id]);
        });
    });
    }
}