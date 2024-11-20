<?php

namespace Database\Factories;

use App\Models\Wish;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wish>
 */
class WishFactory extends Factory
{
    protected $model = Wish::class;


    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'url' => $this->faker->url,
            'price' => $this->faker->randomNumber(4, false),
            'wishlist_id' => 1,
        ];
    }
}
