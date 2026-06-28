<?php

namespace App\Filament\Resources\Menus\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class MenuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make('Identificação')
                    ->description('Nome de referência do menu. O identificador (slug) é gerado automaticamente.')
                    ->icon(Heroicon::OutlinedBars3)
                    ->aside()
                    ->schema([
                        TextInput::make('name')
                            ->label('Nome do menu')
                            ->placeholder('Ex.: Menu Página Home')
                            ->prefixIcon(Heroicon::OutlinedTag)
                            ->maxLength(255)
                            ->required(),
                        TextInput::make('slug')
                            ->label('Identificador (slug)')
                            ->prefixIcon(Heroicon::OutlinedLink)
                            ->disabled()
                            ->dehydrated(false)
                            ->hiddenOn('create'),
                    ]),
                Section::make('Itens do menu')
                    ->description('Os links que aparecem na navegação. Arraste para reordenar.')
                    ->icon(Heroicon::OutlinedQueueList)
                    ->aside()
                    ->schema([
                        Repeater::make('items')
                            ->label('Itens')
                            ->addActionLabel('Adicionar item')
                            ->reorderable()
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                            ->schema([
                                Grid::make(2)->schema([
                                    TextInput::make('name')
                                        ->label('Texto')
                                        ->placeholder('Ex.: Serviços')
                                        ->prefixIcon(Heroicon::OutlinedTag)
                                        ->required(),
                                    TextInput::make('link')
                                        ->label('Link')
                                        ->placeholder('Ex.: #servicos ou https://...')
                                        ->prefixIcon(Heroicon::OutlinedLink)
                                        ->required(),
                                ]),
                            ])
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Section::make('Publicação')
                    ->description('Controle se o menu está ativo.')
                    ->icon(Heroicon::OutlinedEye)
                    ->aside()
                    ->schema([
                        Toggle::make('status')
                            ->label('Menu ativo')
                            ->onColor('success')
                            ->default(true)
                            ->inline(false),
                        DatePicker::make('created_at')
                            ->label('Criado em')
                            ->prefixIcon(Heroicon::OutlinedClock)
                            ->disabled()
                            ->hiddenOn('create'),
                    ]),
            ]);
    }
}
