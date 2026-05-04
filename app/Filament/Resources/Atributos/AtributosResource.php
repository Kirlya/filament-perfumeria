<?php

namespace App\Filament\Resources\Atributos;

use App\Filament\Resources\Atributos\Pages\CreateAtributos;
use App\Filament\Resources\Atributos\Pages\EditAtributos;
use App\Filament\Resources\Atributos\Pages\ListAtributos;
use App\Filament\Resources\Atributos\Schemas\AtributosForm;
use App\Filament\Resources\Atributos\Tables\AtributosTable;
use App\Models\Atributos;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AtributosResource extends Resource
{
    protected static ?string $model = Atributos::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return AtributosForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AtributosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAtributos::route('/'),
            'create' => CreateAtributos::route('/create'),
            'edit' => EditAtributos::route('/{record}/edit'),
        ];
    }
}
