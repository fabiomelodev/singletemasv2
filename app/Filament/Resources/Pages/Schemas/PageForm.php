<?php

namespace App\Filament\Resources\Pages\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make('Identificação')
                    ->description('Título da página. O endereço (slug) é gerado automaticamente a partir do título.')
                    ->icon(Heroicon::OutlinedDocumentText)
                    ->aside()
                    ->schema([
                        TextInput::make('name')
                            ->label('Título da página')
                            ->placeholder('Ex.: Política de Privacidade')
                            ->prefixIcon(Heroicon::OutlinedTag)
                            ->maxLength(255)
                            ->required(),
                        TextInput::make('slug')
                            ->label('Endereço (slug)')
                            ->prefixIcon(Heroicon::OutlinedLink)
                            ->disabled()
                            ->dehydrated(false)
                            ->hiddenOn('create'),
                    ]),
                Section::make('Conteúdo')
                    ->description('O texto principal exibido na página. Use os recursos de formatação para deixá-lo bem apresentado.')
                    ->icon(Heroicon::OutlinedListBullet)
                    ->aside()
                    ->schema([
                        RichEditor::make('content')
                            ->label('Conteúdo')
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Section::make('Publicação')
                    ->description('Controle se a página fica visível para os visitantes do site.')
                    ->icon(Heroicon::OutlinedEye)
                    ->aside()
                    ->schema([
                        Toggle::make('status')
                            ->label('Página ativa')
                            ->helperText('Quando desativada, a página não fica acessível no site.')
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
