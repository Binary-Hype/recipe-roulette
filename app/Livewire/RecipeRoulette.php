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
        if (isset($this->recipe)) {
            $this->recipe = Recipe::where('type', $this->type)->whereNot('id', $this->recipe?->id)->inRandomOrder()->first();
        } else {
            $this->recipe = Recipe::where('type', $this->type)->inRandomOrder()->first();
        }
    }
}
