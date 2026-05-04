<?php

namespace App\Filament\Resources\Provincias;

use App\Filament\Resources\Provincias\Pages\CreateProvincias;
use App\Filament\Resources\Provincias\Pages\EditProvincias;
use App\Filament\Resources\Provincias\Pages\ListProvincias;
use App\Filament\Resources\Provincias\Schemas\ProvinciasForm;
use App\Filament\Resources\Provincias\Tables\ProvinciasTable;
use App\Models\Provincias;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProvinciasResource extends Resource
{
    protected static ?string $model = Provincias::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return ProvinciasForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProvinciasTable::configure($table);
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
            'index' => ListProvincias::route('/'),
            'create' => CreateProvincias::route('/create'),
            'edit' => EditProvincias::route('/{record}/edit'),
        ];
    }
}
