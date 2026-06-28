<?php

namespace App\Filament\Resources\Faqs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class FaqsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->reorderable('order')
            ->striped()
            ->columns([
                TextColumn::make('order')
                    ->label('#')
                    ->badge()
                    ->color('gray'),
                TextColumn::make('name')
                    ->label('Pergunta')
                    ->icon(Heroicon::OutlinedQuestionMarkCircle)
                    ->weight(FontWeight::SemiBold)
                    ->wrap()
                    ->limit(90)
                    ->searchable(),
                ToggleColumn::make('status')
                    ->label('Ativa'),
                TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime('d/m/Y')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TernaryFilter::make('status')
                    ->label('Situação')
                    ->trueLabel('Apenas ativas')
                    ->falseLabel('Apenas inativas')
                    ->placeholder('Todas'),
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
