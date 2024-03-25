<?php

namespace App\Filament\Resources\RecipeResource\Pages;

use App\Filament\Resources\RecipeResource;
use App\Models\Recipe;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditRecipe extends EditRecord
{
    protected static string $resource = RecipeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->after(function (Recipe $recipe) {
                    if ($recipe->cover) {
                        Storage::disk('public')->delete($recipe->cover);
                    }
                }),
        ];
    }
}
