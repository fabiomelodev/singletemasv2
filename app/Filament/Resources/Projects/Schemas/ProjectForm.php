<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make('Projeto')
                    ->description('Dados do case que será exibido na seção "Nossos Cases".')
                    ->icon(Heroicon::OutlinedRectangleStack)
                    ->aside()
                    ->schema([
                        TextInput::make('name')
                            ->label('Nome do projeto')
                            ->placeholder('Ex.: AD. Calvário')
                            ->prefixIcon(Heroicon::OutlinedTag)
                            ->maxLength(255)
                            ->required(),
                        TextInput::make('link')
                            ->label('Endereço do site')
                            ->placeholder('Ex.: meusite.com.br')
                            ->prefixIcon(Heroicon::OutlinedLink)
                            ->maxLength(255)
                            ->required(),
                    ]),
                Section::make('Imagem do case')
                    ->description('Uma captura de tela ou imagem que representa o projeto. Proporção recomendada: 16:9.')
                    ->icon(Heroicon::OutlinedPhoto)
                    ->aside()
                    ->schema([
                        FileUpload::make('thumbnail')
                            ->label('Imagem')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->visibility('public')
                            ->columnSpanFull(),
                    ]),
                Section::make('Publicação')
                    ->description('Controle a visibilidade deste case no site.')
                    ->icon(Heroicon::OutlinedEye)
                    ->aside()
                    ->schema([
                        Toggle::make('status')
                            ->label('Case ativo')
                            ->helperText('Quando desativado, o case não aparece no site.')
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
