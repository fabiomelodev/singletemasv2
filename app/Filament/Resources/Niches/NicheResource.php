<?php

namespace App\Filament\Resources\Niches;

use App\Filament\Resources\Niches\Pages\CreateNiche;
use App\Filament\Resources\Niches\Pages\EditNiche;
use App\Filament\Resources\Niches\Pages\ListNiches;
use App\Filament\Resources\Niches\Schemas\NicheForm;
use App\Filament\Resources\Niches\Tables\NichesTable;
use App\Models\Niche;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class NicheResource extends Resource
{
    protected static ?string $model = Niche::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Niche';

    protected static ?string $slug = 'nicho';

    protected static string|UnitEnum|null $navigationGroup = 'Nichos';

    protected static ?int $navigationSort = 3;

    public static function getNavigationBadge(): ?string
    {
        return static::getEloquentQuery()->count();
    }

    public static function getPluralModelLabel(): string
    {
        return 'Nichos';
    }

    public static function getModelLabel(): string
    {
        return 'Nicho';
    }

    public static function form(Schema $schema): Schema
    {
        return NicheForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NichesTable::configure($table);
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
            'index' => ListNiches::route('/'),
            'create' => CreateNiche::route('/create'),
            'edit' => EditNiche::route('/{record}/edit'),
        ];
    }
}
