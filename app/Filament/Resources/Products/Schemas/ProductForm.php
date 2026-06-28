<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make('Identificação')
                    ->description('Nome interno do produto e o título exibido na seção do site.')
                    ->icon(Heroicon::OutlinedNewspaper)
                    ->aside()
                    ->schema([
                        TextInput::make('name')
                            ->label('Nome do produto')
                            ->placeholder('Ex.: Desenvolvimento de Sites')
                            ->prefixIcon(Heroicon::OutlinedTag)
                            ->maxLength(255)
                            ->required(),
                        TextInput::make('section_title')
                            ->label('Título da seção')
                            ->placeholder('Ex.: Desenvolva o seu site')
                            ->prefixIcon(Heroicon::OutlinedDocumentText)
                            ->maxLength(255)
                            ->required(),
                        DatePicker::make('created_at')
                            ->label('Criado em')
                            ->prefixIcon(Heroicon::OutlinedClock)
                            ->disabled()
                            ->hiddenOn('create'),
                    ]),
                Section::make('Apresentação')
                    ->description('Os textos que descrevem e vendem o produto na página.')
                    ->icon(Heroicon::OutlinedChatBubbleBottomCenterText)
                    ->aside()
                    ->schema([
                        Textarea::make('description')
                            ->label('Descrição')
                            ->placeholder('Apresente o produto de forma atraente.')
                            ->rows(3)
                            ->required()
                            ->columnSpanFull(),
                        Textarea::make('phrase')
                            ->label('Frase de destaque')
                            ->placeholder('Ex.: Desenvolva o seu site a partir de')
                            ->rows(2)
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Section::make('Investimento e chamada')
                    ->description('Preço de referência e o botão de ação (CTA).')
                    ->icon(Heroicon::OutlinedCurrencyDollar)
                    ->aside()
                    ->schema([
                        TextInput::make('price')
                            ->label('Preço')
                            ->placeholder('Ex.: R$ 890,00')
                            ->prefixIcon(Heroicon::OutlinedCurrencyDollar)
                            ->required(),
                        TextInput::make('button_text')
                            ->label('Texto do botão')
                            ->placeholder('Ex.: Quero desenvolver o meu site')
                            ->prefixIcon(Heroicon::OutlinedCursorArrowRays)
                            ->required(),
                        TextInput::make('button_link')
                            ->label('Link do botão')
                            ->placeholder('Ex.: https://wa.me/55...')
                            ->prefixIcon(Heroicon::OutlinedLink)
                            ->url()
                            ->required(),
                    ]),
                Section::make('Módulos e Recursos')
                    ->description('Os itens listados no produto. Arraste para reordenar.')
                    ->icon(Heroicon::OutlinedListBullet)
                    ->aside()
                    ->schema([
                        Tabs::make('Itens')
                            ->columnSpanFull()
                            ->tabs([
                                Tab::make('Módulos')
                                    ->icon(Heroicon::OutlinedSquares2x2)
                                    ->schema([
                                        Repeater::make('modules')
                                            ->label('Módulos')
                                            ->addActionLabel('Adicionar módulo')
                                            ->reorderable()
                                            ->collapsible()
                                            ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                                            ->schema([
                                                TextInput::make('name')
                                                    ->label('Nome')
                                                    ->placeholder('Ex.: Landing Page')
                                                    ->required(),
                                            ]),
                                    ]),
                                Tab::make('Recursos')
                                    ->icon(Heroicon::OutlinedCheckCircle)
                                    ->schema([
                                        Repeater::make('resources')
                                            ->label('Recursos')
                                            ->addActionLabel('Adicionar recurso')
                                            ->reorderable()
                                            ->collapsible()
                                            ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                                            ->schema([
                                                TextInput::make('name')
                                                    ->label('Nome')
                                                    ->placeholder('Ex.: Painel de controle')
                                                    ->required(),
                                            ]),
                                    ]),
                            ]),
                    ]),
            ]);
    }
}
