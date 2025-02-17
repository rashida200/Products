<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produit;

class ProduitFactory extends Factory
{
    protected $model = Produit::class;

    public function definition(): array
    {
        return [
            'nom' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'quantite' => $this->faker->numberBetween(1, 100),
            'prix' => $this->faker->randomFloat(2, 5, 500),
        ];
    }
}
