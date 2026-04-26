<?php

namespace App\Filament\Resources\Etiquetas;

use App\Filament\Resources\Etiquetas\Pages\CreateEtiquetas;
use App\Filament\Resources\Etiquetas\Pages\EditEtiquetas;
use App\Filament\Resources\Etiquetas\Pages\ListEtiquetas;
use App\Filament\Resources\Etiquetas\Schemas\EtiquetasForm;
use App\Filament\Resources\Etiquetas\Tables\EtiquetasTable;
use App\Models\Etiquetas;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EtiquetasResource extends Resource
{
    protected static ?string $model = Etiquetas::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return EtiquetasForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EtiquetasTable::configure($table);
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
            'index' => ListEtiquetas::route('/'),
            'create' => CreateEtiquetas::route('/create'),
            'edit' => EditEtiquetas::route('/{record}/edit'),
        ];
    }
}
