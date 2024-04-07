<?php

namespace App\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class RecipeRoulette extends Component
{
    public ?Recipe $recipe;

    public string $type = 'vegan';

    public function render()
    {
        return view('livewire.recipe-roulette');
    }

    public function fetchRandomRecipe()
    {
        $randomRecipe = Recipe::where('type', $this->type)->inRandomOrder()->first();

        if ($this->recipe === null || $randomRecipe !== $this->recipe) {
            $this->recipe = $randomRecipe;
        } else {
            $this->fetchRandomRecipe();
        }
    }
}
