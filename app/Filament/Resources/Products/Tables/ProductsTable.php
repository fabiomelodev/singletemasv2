<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->striped()
            ->columns([
                TextColumn::make('name')
                    ->label('Produto')
                    ->icon(Heroicon::OutlinedNewspaper)
                    ->weight(FontWeight::SemiBold)
                    ->description(fn ($record) => $record->section_title)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('price')
                    ->label('Preço')
                    ->badge()
                    ->color('success')
                    ->icon(Heroicon::OutlinedCurrencyDollar),
                TextColumn::make('modules')
                    ->label('Módulos')
                    ->badge()
                    ->color('info')
                    ->formatStateUsing(fn ($state) => is_array($state) ? count($state) : 0),
                TextColumn::make('resources')
                    ->label('Recursos')
                    ->badge()
                    ->color('gray')
                    ->formatStateUsing(fn ($state) => is_array($state) ? count($state) : 0),
                TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime('d/m/Y')
                    ->sortable()
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
