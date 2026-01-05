<?php

namespace App\Filament\Resources\Niches\RelationManagers;

use App\Filament\Resources\Niches\NicheResource;
use App\Filament\Resources\Plans\PlanResource;
use Dom\Text;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class PlansRelationManager extends RelationManager
{
    protected static string $relationship = 'plans';

    protected static ?string $title = 'Planos';

    public function table(Table $table): Table
    {
        return $table
            ->heading(PlanResource::getPluralModelLabel())
            ->reorderable('order')
            ->paginated(false)
            ->headerActions([
                CreateAction::make()
                    ->label('Criar Plano'),
            ])
            ->columns([
                TextColumn::make('name')
                    ->label('Nome'),
                TextColumn::make('price')
                    ->label('Preço')
            ])
            ->recordActions([
                EditAction::make()
                    ->iconButton()
                    ->url(function (Model $record): string {
                        return PlanResource::getUrl('edit', ['record' => $record]);
                    }),
                DeleteAction::make()
                    ->iconButton()
            ]);
    }
}
