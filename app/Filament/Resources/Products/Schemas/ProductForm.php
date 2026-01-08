<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class ProductForm
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
                        TextInput::make('section_title')
                            ->label('Título da Seção')
                            ->required(),
                        Textarea::make('description')
                            ->label('Descrição')
                            ->required(),
                        Textarea::make('phrase')
                            ->label('Frase')
                            ->required(),
                        Tabs::make()
                            ->tabs([
                                Tab::make('Módulos')
                                    ->schema([
                                        Repeater::make('modules')
                                            ->label('Módulos')
                                            ->schema([
                                                TextInput::make('name')
                                                    ->label('Nome'),
                                            ]),
                                    ]),
                                Tab::make('Recursos')
                                    ->schema([
                                        Repeater::make('resources')
                                            ->label('Recursos')
                                            ->schema([
                                                TextInput::make('name')
                                                    ->label('Nome'),
                                            ]),
                                    ]),
                            ]),
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
                        TextInput::make('button_text')
                            ->label('Texto do Botão')
                            ->required(),
                        TextInput::make('button_link')
                            ->label('Link do Botão')
                            ->required(),
                        Select::make('niche_id')
                            ->label('Nicho')
                            ->relationship('niche', 'name')
                            ->required(),
                    ])
            ]);
    }
}
