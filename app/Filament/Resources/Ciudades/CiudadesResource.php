<?php

namespace App\Filament\Resources\Ciudades;

use App\Filament\Resources\Ciudades\Pages\CreateCiudades;
use App\Filament\Resources\Ciudades\Pages\EditCiudades;
use App\Filament\Resources\Ciudades\Pages\ListCiudades;
use App\Filament\Resources\Ciudades\Schemas\CiudadesForm;
use App\Filament\Resources\Ciudades\Tables\CiudadesTable;
use App\Models\Ciudades;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CiudadesResource extends Resource
{
    protected static ?string $model = Ciudades::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::MapPin;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return CiudadesForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CiudadesTable::configure($table);
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
            'index' => ListCiudades::route('/'),
            'create' => CreateCiudades::route('/create'),
            'edit' => EditCiudades::route('/{record}/edit'),
        ];
    }
}
