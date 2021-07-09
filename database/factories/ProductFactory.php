<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->text(500),
            'image1' => '1625510938-picture.jpg.jpg',
            'image2' => '1625510938-picture.jpg.jpg',
            'image3' => '1625510938-picture.jpg.jpg',
            'image4' => '1625510938-picture.jpg.jpg',
            'image5' => '1625510938-picture.jpg.jpg',
            'daily_rate' => $this->faker->numberBetween(1000,70000),
            'causion_fee' => $this->faker->numberBetween(1000,70000),
            'availability' => 'available',
            'address' => '45 Bonny Street',
            'colour' => 'green',
            'size' => 'big',
            'condition'=> 'good',
            'user_id' =>$this->faker->numberBetween(11,13),
            'state_id' => 6,
            'city_id' => 20,
            'category_id' => $this->faker->numberBetween(4,14),
            'created_at' => now(),
            'updated_at' => now()
  
        ];
    }
}
