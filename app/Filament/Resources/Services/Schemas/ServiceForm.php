<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make('Serviço')
                    ->description('Nome do serviço que será exibido na seção "Nossos Serviços".')
                    ->icon(Heroicon::OutlinedSparkles)
                    ->aside()
                    ->schema([
                        TextInput::make('name')
                            ->label('Nome do serviço')
                            ->placeholder('Ex.: Desenvolvimento de site')
                            ->prefixIcon(Heroicon::OutlinedTag)
                            ->maxLength(255)
                            ->required(),
                    ]),
                Section::make('Descrição')
                    ->description('Explique de forma breve e clara o que este serviço oferece.')
                    ->icon(Heroicon::OutlinedChatBubbleLeftRight)
                    ->aside()
                    ->schema([
                        RichEditor::make('description')
                            ->label('Descrição')
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Section::make('Publicação')
                    ->description('Controle a visibilidade deste serviço no site.')
                    ->icon(Heroicon::OutlinedEye)
                    ->aside()
                    ->schema([
                        Toggle::make('status')
                            ->label('Serviço ativo')
                            ->helperText('Quando desativado, o serviço não aparece no site.')
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
