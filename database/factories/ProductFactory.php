<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Teclado Gamer Una Mano 35 Teclas G92',
            'description' => $this->faker->text,
            'image' => 'https://http2.mlstatic.com/D_Q_NP_659991-MCO43533279270_092020-AB.webp',
            'price' => $this->faker->randomNumber(5)
        ];
    }
}
