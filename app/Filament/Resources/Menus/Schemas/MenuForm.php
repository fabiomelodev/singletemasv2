<?php

namespace App\Filament\Resources\Menus\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class MenuForm
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
                        Repeater::make('items')
                            ->label('Itens')
                            ->schema([
                                TextInput::make('name')
                                    ->label('Nome')
                                    ->required(),
                                TextInput::make('link')
                                    ->required()
                            ])
                            ->required(),
                    ]),
                Section::make()
                    ->columnSpan(3)
                    ->schema([
                        DatePicker::make('created_at')
                            ->label('Criado em')
                            ->disabled()
                            ->hiddenOn('create'),
                        TextInput::make('slug')
                            ->disabled()
                            ->hiddenOn('create')
                            ->required(),
                        Toggle::make('status')
                            ->required(),
                    ]),
            ]);
    }
}
