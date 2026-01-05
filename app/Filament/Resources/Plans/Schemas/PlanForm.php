<?php

namespace App\Filament\Resources\Plans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PlanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(12)
            ->components([
                Section::make()
                    ->columnSpan(9)
                    ->schema([
                        TextInput::make('name')
                            ->label('Nome')
                            ->required(),
                        RichEditor::make('excerpt')
                            ->label('Resumo')
                            ->required(),
                    ]),
                Section::make()
                    ->columnSpan(3)
                    ->schema([
                        DatePicker::make('created_at')
                            ->label('Criado em')
                            ->disabled()
                            ->hiddenOn('create'),
                        TextInput::make('price')
                            ->label('Preço')
                            ->required(),
                        TextInput::make('link')
                            ->required(),
                        Select::make('niche_id')
                            ->label('Nicho')
                            ->relationship('niche', 'name')
                            ->required(),
                    ]),
                Section::make('Detalhes do nicho')
                    ->columnSpan(9)
                    ->schema([
                        RichEditor::make('description')
                            ->label('Descrição')
                            ->required(),
                        RichEditor::make('observation')
                            ->label('Observação')
                            ->required()
                            ->columnSpanFull(),
                        Repeater::make('items')
                            ->label('Itens')
                            ->required()
                            ->schema([
                                TextInput::make('name')
                                    ->label('Nome'),
                                Textarea::make('description')
                                    ->label('Descrição')
                            ]),
                        Repeater::make('resources')
                            ->label('Recursos')
                            ->required()
                            ->schema([
                                TextInput::make('name')
                                    ->label('Nome')
                            ])
                    ])
            ]);
    }
}
