<?php

namespace App\Filament\Resources\Cps;

use App\Filament\Resources\Cps\Pages\CreateCp;
use App\Filament\Resources\Cps\Pages\EditCp;
use App\Filament\Resources\Cps\Pages\ListCps;
use App\Filament\Resources\Cps\Schemas\CpForm;
use App\Filament\Resources\Cps\Tables\CpsTable;
use App\Models\Cps;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CpResource extends Resource
{
    protected static ?string $model = Cps::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return CpForm::configure($schema);
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
            'create' => CreateCp::route('/create'),
            'edit' => EditCp::route('/{record}/edit'),
        ];
    }


}
