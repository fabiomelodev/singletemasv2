<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make('Depoimento')
                    ->description('O texto do depoimento, com as palavras do próprio cliente.')
                    ->icon(Heroicon::OutlinedChatBubbleLeftRight)
                    ->aside()
                    ->schema([
                        RichEditor::make('description')
                            ->label('Depoimento')
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Section::make('Autor')
                    ->description('Quem deu o depoimento e a que plano ele se refere.')
                    ->icon(Heroicon::OutlinedUser)
                    ->aside()
                    ->schema([
                        TextInput::make('name')
                            ->label('Nome')
                            ->placeholder('Ex.: Fernanda Lopes')
                            ->prefixIcon(Heroicon::OutlinedUser)
                            ->maxLength(255)
                            ->required(),
                        TextInput::make('office')
                            ->label('Cargo / Empresa')
                            ->placeholder('Ex.: Clínica Vida Plena')
                            ->prefixIcon(Heroicon::OutlinedTag)
                            ->maxLength(255)
                            ->required(),
                        TextInput::make('plan')
                            ->label('Plano')
                            ->placeholder('Ex.: Plano Premium')
                            ->prefixIcon(Heroicon::OutlinedSparkles)
                            ->maxLength(255)
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
