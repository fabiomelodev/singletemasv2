<?php

namespace App\Filament\Resources\Niches\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class NicheForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(12)
            ->components([
                Section::make('Banner')
                    ->columnSpan(9)
                    ->schema([
                        TextInput::make('banner_tag')
                            ->label('Tag')
                            ->required(),
                        TextInput::make('banner_title_first')
                            ->label('Primeiro título')
                            ->required(),
                        TextInput::make('banner_title_second')
                            ->label('Segundo título')
                            ->required(),
                        RichEditor::make('banner_description')
                            ->label('Descrição')
                            ->required()
                    ]),
                Section::make()
                    ->columnSpan(3)
                    ->schema([
                        DatePicker::make('created_at')
                            ->label('Criado em')
                            ->disabled()
                            ->hiddenOn('create'),
                        Toggle::make('status')
                            ->required(),
                    ]),
                Section::make()
                    ->columnSpan(9)
                    ->schema([
                        TextInput::make('name')
                            ->label('Nome')
                            ->required(),
                        Section::make('Sobre o plano')
                            ->schema([
                                TextInput::make('plan_title')
                                    ->label('Nome')
                                    ->required(),
                                RichEditor::make('plan_description')
                                    ->label('Descrição')
                                    ->required(),
                                TextInput::make('minimum_price')
                                    ->label('Valor mínimo')
                                    ->required(),
                                Repeater::make('plan_details')
                                    ->label('Detalhes')
                                    ->schema([
                                        TextInput::make('name')
                                            ->label('Nome')
                                    ])
                                    ->required(),
                            ])
                    ]),

            ]);
    }
}
