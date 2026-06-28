<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make('Pergunta')
                    ->description('A dúvida frequente, como o visitante a faria.')
                    ->icon(Heroicon::OutlinedQuestionMarkCircle)
                    ->aside()
                    ->schema([
                        TextInput::make('name')
                            ->label('Pergunta')
                            ->placeholder('Ex.: Em quanto tempo o site fica pronto?')
                            ->prefixIcon(Heroicon::OutlinedChatBubbleLeftRight)
                            ->maxLength(255)
                            ->required(),
                        TextInput::make('order')
                            ->label('Ordem de exibição')
                            ->numeric()
                            ->minValue(1)
                            ->prefixIcon(Heroicon::OutlinedHashtag)
                            ->helperText('Define a posição da pergunta na lista.')
                            ->required(),
                    ]),
                Section::make('Resposta')
                    ->description('Responda de forma clara e objetiva. Você pode formatar o texto.')
                    ->icon(Heroicon::OutlinedChatBubbleBottomCenterText)
                    ->aside()
                    ->schema([
                        RichEditor::make('description')
                            ->label('Resposta')
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Section::make('Publicação')
                    ->description('Controle a visibilidade desta pergunta no site.')
                    ->icon(Heroicon::OutlinedEye)
                    ->aside()
                    ->schema([
                        Toggle::make('status')
                            ->label('Pergunta ativa')
                            ->helperText('Quando desativada, não aparece na seção de FAQ.')
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
