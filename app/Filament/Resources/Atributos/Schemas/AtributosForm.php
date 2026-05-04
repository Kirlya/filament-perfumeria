<?php

namespace App\Filament\Resources\Atributos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AtributosForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
            ]);
    }
}
