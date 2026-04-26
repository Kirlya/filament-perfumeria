<?php

namespace App\Filament\Resources\Subcategorias;

use App\Filament\Resources\Subcategorias\Pages\CreateSubcategorias;
use App\Filament\Resources\Subcategorias\Pages\EditSubcategorias;
use App\Filament\Resources\Subcategorias\Pages\ListSubcategorias;
use App\Filament\Resources\Subcategorias\Schemas\SubcategoriasForm;
use App\Filament\Resources\Subcategorias\Tables\SubcategoriasTable;
use App\Models\Subcategorias;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SubcategoriasResource extends Resource
{
    protected static ?string $model = Subcategorias::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return SubcategoriasForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SubcategoriasTable::configure($table);
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
            'index' => ListSubcategorias::route('/'),
            'create' => CreateSubcategorias::route('/create'),
            'edit' => EditSubcategorias::route('/{record}/edit'),
        ];
    }
}
