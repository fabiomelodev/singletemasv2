<?php

namespace App\Filament\Resources\Processes\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ProcessForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make('Etapa do processo')
                    ->description('Cada etapa representa um passo do seu fluxo de trabalho exibido na seção "Nossos Processos".')
                    ->icon(Heroicon::OutlinedArrowTrendingUp)
                    ->aside()
                    ->schema([
                        TextInput::make('name')
                            ->label('Nome da etapa')
                            ->placeholder('Ex.: Envio do briefing')
                            ->prefixIcon(Heroicon::OutlinedTag)
                            ->maxLength(255)
                            ->required(),
                        Textarea::make('description')
                            ->label('Descrição')
                            ->placeholder('Explique o que acontece nesta etapa.')
                            ->rows(3)
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Section::make('Ordem de exibição')
                    ->description('Define a posição desta etapa na sequência (1 = primeira).')
                    ->icon(Heroicon::OutlinedHashtag)
                    ->aside()
                    ->schema([
                        TextInput::make('order')
                            ->label('Ordem')
                            ->numeric()
                            ->minValue(1)
                            ->prefixIcon(Heroicon::OutlinedHashtag)
                            ->helperText('Número que define a ordem das etapas.')
                            ->required(),
                        DatePicker::make('created_at')
                            ->label('Criado em')
                            ->prefixIcon(Heroicon::OutlinedClock)
                            ->disabled()
                            ->hiddenOn('create'),
                    ]),
            ]);
    }
}
