<?php

namespace App\Filament\Resources\Processes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProcessesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->paginated(false)
            ->reorderable('order')
            ->columns([
                TextColumn::make('order')
                    ->label('Ordem')
                    ->badge()
                    ->color('primary'),
                TextColumn::make('name')
                    ->label('Etapa')
                    ->weight(FontWeight::SemiBold)
                    ->searchable(),
                TextColumn::make('description')
                    ->label('Descrição')
                    ->limit(70)
                    ->wrap()
                    ->color('gray')
                    ->toggleable(),
                TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime('d/m/Y')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->recordActions([
                EditAction::make()
                    ->iconButton(),
                DeleteAction::make()
                    ->iconButton(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
