<?php

namespace App\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class RecipeRoulette extends Component
{
    public Recipe $recipe;
    public string $type = 'vegan';

    public function render()
    {
        return view('livewire.recipe-roulette');
    }

    public function mount()
    {
        $this->recipe = Recipe::where('type', $this->type)->inRandomOrder()->first();
    }

    public function fetchRandomRecipe()
    {
        $this->recipe = Recipe::where('type', $this->type)->inRandomOrder()->first();
    }
}
