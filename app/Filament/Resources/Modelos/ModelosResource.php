<?php

namespace App\Filament\Resources\Modelos;

use App\Filament\Resources\Modelos\Pages\CreateModelos;
use App\Filament\Resources\Modelos\Pages\EditModelos;
use App\Filament\Resources\Modelos\Pages\ListModelos;
use App\Filament\Resources\Modelos\Schemas\ModelosForm;
use App\Filament\Resources\Modelos\Tables\ModelosTable;
use App\Models\Modelos;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ModelosResource extends Resource
{
    protected static ?string $model = Modelos::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Hashtag;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return ModelosForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ModelosTable::configure($table);
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
            'index' => ListModelos::route('/'),
            'create' => CreateModelos::route('/create'),
            'edit' => EditModelos::route('/{record}/edit'),
        ];
    }
}
