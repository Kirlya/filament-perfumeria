<?php

namespace App\Filament\Resources\Cps;

use App\Filament\Resources\Cps\Pages\CreateCps;
use App\Filament\Resources\Cps\Pages\EditCps;
use App\Filament\Resources\Cps\Pages\ListCps;
use App\Filament\Resources\Cps\Schemas\CpsForm;
use App\Filament\Resources\Cps\Tables\CpsTable;
use App\Models\Cps;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CpsResource extends Resource
{
    protected static ?string $model = Cps::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Envelope;

    protected static ?string $recordTitleAttribute = 'Codigo Postal';

    public static function form(Schema $schema): Schema
    {
        return CpsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CpsTable::configure($table);
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
            'index' => ListCps::route('/'),
            'create' => CreateCps::route('/create'),
            'edit' => EditCps::route('/{record}/edit'),
        ];
    }
}
