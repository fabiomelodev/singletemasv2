<?php

namespace App\Filament\Resources\Niches\RelationManagers;

use App\Filament\Resources\Niches\NicheResource;
use App\Filament\Resources\Resources\ResourceResource;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class ResourcesRelationManager extends RelationManager
{
    protected static string $relationship = 'resources';

    protected static ?string $title = 'Recursos';

    // protected static ?string $relatedResource = NicheResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->heading(ResourceResource::getPluralModelLabel())
            ->reorderable('order')
            ->paginated(false)
            ->headerActions([
                CreateAction::make()
                    ->label('Criar Recurso'),
            ])
            ->columns([
                TextColumn::make('name')
                    ->label('Nome')
            ])
            ->recordActions([
                EditAction::make()
                    ->iconButton()
                    ->url(function (Model $record): string {
                        return ResourceResource::getUrl('edit', ['record' => $record]);
                    }),
                DeleteAction::make()
                    ->iconButton()
            ]);
    }
}
