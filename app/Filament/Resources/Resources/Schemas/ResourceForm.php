<?php

namespace App\Filament\Resources\Resources\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class ResourceForm
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
                        Repeater::make('plans')
                            ->label('Planos')
                            ->columns(3)
                            ->schema([
                                TextInput::make('name')
                                    ->label('Nome'),
                                Select::make('type')
                                    ->label('Tipo')
                                    ->live()
                                    ->options([
                                        'text' => 'Texto',
                                        'check' => 'Check'
                                    ]),
                                TextInput::make('value')
                                    ->label('Valor')
                                    ->visible(fn(Get $get): bool => $get('type') == 'text' ? true : false),
                                Select::make('value')
                                    ->label('Valor')
                                    ->visible(fn(Get $get): bool => $get('type') == 'check' ? true : false)
                                    ->options([
                                        'false' => 'Não',
                                        'true' => 'Sim'
                                    ])
                            ])
                    ]),
                Section::make()
                    ->columnSpan(3)
                    ->schema([
                        DatePicker::make('created_at')
                            ->label('Criado em')
                            ->disabled()
                            ->hiddenOn('create'),
                        Select::make('niche_id')
                            ->label('Nicho')
                            ->relationship('niche', 'name')
                            ->required(),
                    ])

            ]);
    }
}
