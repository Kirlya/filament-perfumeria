<?php

namespace App\Filament\Resources\Lotes\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LotesForm
{

    //Falta vinculacion con el modelo id que pueda permitir busqueda entre los existentes
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('cantidad')
                    ->required()
                    ->numeric(),
                TextInput::make('modelo_id')
                    ->required()
                    ->numeric(),
                DatePicker::make('fecha_ingreso')
                    ->required(),
                DatePicker::make('vencimiento')
                    ->required(),
            ]);
    }
}
