<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Recipe;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'ingredients' => '{}',
            'type' => $this->faker->randomElement(["meat","vegetarian","vegan"]),
            'cover' => $this->faker->word(),
            'preparation' => $this->faker->text(),
        ];
    }
}
