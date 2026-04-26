<?php

namespace App\Filament\Resources\Subcategorias\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SubcategoriasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                Toggle::make('activo')
                    ->required(),
                TextInput::make('categoria_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
