<?php

namespace App\Filament\Resources\Niches\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
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
                TextInput::make('name')
                    ->label('Nome')
                    ->columnSpan(9)
                    ->required(),
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
                Section::make('Sobre os planos')
                    ->columnSpan(9)
                    ->schema([
                        TextInput::make('section_plans_title')
                            ->label('Título da seção'),
                        Textarea::make('section_plans_description')
                            ->label('Descrição da seção'),
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
                    ]),
                Section::make('Sobre os recursos')
                    ->columnSpan(9)
                    ->schema([
                        TextInput::make('section_resources_title')
                            ->label('Título da seção'),
                        Textarea::make('section_resources_description')
                            ->label('Descrição da seção')
                    ]),
                Section::make('Sobre os detalhes dos planos')
                    ->columnSpan(9)
                    ->schema([
                        TextInput::make('section_plans_details_title')
                            ->label('Título da seção'),
                        Textarea::make('section_plans_details_description')
                            ->label('Descrição da seção')
                    ]),

            ]);
    }
}
