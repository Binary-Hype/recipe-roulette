<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $amounts = ['1 TL', '2 Stück', '3 EL', 'etwas'];
        $ingredients = ['Zwiebel', 'Salz', 'Veganes Hackfleisch', 'Ketchup'];

        return [
            'name' => $this->faker->name(),
            'ingredients' => [
                ['amount' => $this->faker->randomElement($amounts), 'ingredient' => $this->faker->randomElement($ingredients)],
                ['amount' => $this->faker->randomElement($amounts), 'ingredient' => $this->faker->randomElement($ingredients)],
                ['amount' => $this->faker->randomElement($amounts), 'ingredient' => $this->faker->randomElement($ingredients)],
                ['amount' => $this->faker->randomElement($amounts), 'ingredient' => $this->faker->randomElement($ingredients)],
            ],
            'type' => $this->faker->randomElement(['meat', 'vegetarian', 'vegan']),
            'cover' => $this->faker->word(),
            'instructions' => $this->faker->text(),
        ];
    }
}
