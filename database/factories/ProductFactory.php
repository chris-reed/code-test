<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    private $product_types = [
      'Shirt','Pants','Hat','Shoes','Socks','Tie','Gloves'
    ];
    public function definition()
    {
        return [
            'name' => $this->faker->colorName(). " ".$this->product_types[array_rand($this->product_types)],
            'description' => $this->faker->paragraph(),
            'price' =>$this->faker->randomFloat(2,100,10000)
        ];
    }
}
