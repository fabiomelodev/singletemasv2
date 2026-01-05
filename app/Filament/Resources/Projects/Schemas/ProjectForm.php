<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProjectForm
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
                        TextInput::make('link')
                            ->required(),
                    ]),
                Section::make()
                    ->columnSpan(3)
                    ->schema([
                        FileUpload::make('thumbnail')
                            ->image()
                            ->disk('public'),
                        Select::make('niche_id')
                            ->label('Nicho')
                            ->relationship('niche', 'name')
                            ->required(),
                        Toggle::make('status')
                            ->required(),
                    ])
            ]);
    }
}
