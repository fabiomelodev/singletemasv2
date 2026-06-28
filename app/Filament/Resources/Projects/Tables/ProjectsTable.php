<?php

namespace App\Filament\Resources\Projects\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->striped()
            ->defaultSort('name', 'asc')
            ->columns([
                ImageColumn::make('thumbnail')
                    ->label('Imagem')
                    ->disk('public')
                    ->square()
                    ->size(48),
                TextColumn::make('name')
                    ->label('Projeto')
                    ->weight(FontWeight::SemiBold)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('link')
                    ->label('Site')
                    ->badge()
                    ->color('info')
                    ->icon(Heroicon::OutlinedLink)
                    ->url(fn ($record) => $record->link ? 'https://' . preg_replace('#^https?://#', '', $record->link) : null)
                    ->openUrlInNewTab(),
                ToggleColumn::make('status')
                    ->label('Ativo'),
            ])
            ->filters([
                TernaryFilter::make('status')
                    ->label('Situação')
                    ->trueLabel('Apenas ativos')
                    ->falseLabel('Apenas inativos')
                    ->placeholder('Todos'),
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
