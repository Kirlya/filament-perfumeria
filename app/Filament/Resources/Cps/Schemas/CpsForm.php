<?php

namespace App\Filament\Resources\Cps\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CpsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('provincia_id')
                    ->required()
                    ->numeric(),
                TextInput::make('ciudad_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
