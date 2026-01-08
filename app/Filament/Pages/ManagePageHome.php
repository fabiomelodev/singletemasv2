<?php

namespace App\Filament\Pages;

use App\Models\Project;
use App\Settings\PageHomeSettings;
use BackedEnum;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

class ManagePageHome extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = PageHomeSettings::class;

    protected static string|UnitEnum|null $navigationGroup = 'Páginas';

    protected static ?string $navigationLabel = 'Página Inicial';

    protected static ?string $title = 'Página Inicial';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Tabs')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Banner')
                            ->schema([
                                TextInput::make('banner_tag')
                                    ->label('Tag')
                                    ->required(),
                                TextInput::make('banner_title_first')
                                    ->label('Primeiro Título')
                                    ->required(),
                                TextInput::make('banner_title_second')
                                    ->label('Segundo Título')
                                    ->required(),
                                Textarea::make('banner_description')
                                    ->label('Descrição')
                                    ->required(),
                                FileUpload::make('banner_image')
                                    ->label('Imagem')
                                    ->image()
                                    ->disk('public')
                                    ->visibility('publick')
                                    ->required(),
                            ]),
                        Tab::make('Nossos Serviços')
                            ->schema([
                                TextInput::make('section_service_title')
                                    ->label('Título da Seção')
                                    ->required(),
                                Textarea::make('section_service_description')
                                    ->label('Descrição da Seção'),
                                Repeater::make('services')
                                    ->label('Serviços')
                                    ->schema([
                                        TextInput::make('name')
                                            ->label('Nome')
                                            ->required(),
                                        Textarea::make('description')
                                            ->label('Descrição')
                                            ->required()
                                    ])
                            ]),
                        Tab::make('Nossos Cases')
                            ->schema([
                                CheckboxList::make('cases')
                                    ->label('Cases')
                                    ->helperText('Escolher os cases para destacar na página inicial')
                                    ->options(Project::orderBy('name', 'asc')->pluck('name', 'id'))
                                    ->required()
                            ]),
                        Tab::make('Modelo de Trabalho')
                            ->schema([
                                TextInput::make('mode_section_title')
                                    ->label('Título da Seção')
                                    ->required(),
                                Textarea::make('mode_section_description')
                                    ->label('Descrição da Seção')
                                    ->required(),
                                Repeater::make('mode_steps')
                                    ->label('Etapas')
                                    ->schema([
                                        TextInput::make('name')
                                            ->label('Nome')
                                            ->required(),
                                        Textarea::make('description')
                                            ->label('Descrição')
                                            ->required(),
                                        Textarea::make('notice')
                                            ->label('Observação Final')
                                            ->required(),
                                        TextInput::make('items_title_first')
                                            ->label('Título Itens Primeiro Bloco')
                                            ->required(),
                                        Repeater::make('items_first')
                                            ->label('Itens')
                                            ->schema([
                                                TextInput::make('name')
                                                    ->label('Nome')
                                                    ->required()
                                            ])->minItems(1)
                                            ->required(),
                                        TextInput::make('items_title_second')
                                            ->label('Título Itens Segundo Bloco'),
                                        Repeater::make('items_second')
                                            ->label('Itens')
                                            ->schema([
                                                TextInput::make('name')
                                                    ->label('Nome')
                                            ])
                                    ]),
                                Repeater::make('mode_objectives')
                                    ->label('Objetivos')
                                    ->schema([
                                        TextInput::make('name')
                                            ->label('Nome')
                                            ->required(),
                                        RichEditor::make('description')
                                            ->label('Descrição')
                                            ->required(),
                                    ])
                                    ->defaultItems(3)
                                    ->minItems(3)
                                    ->maxItems(3),

                            ])
                    ])
            ]);
    }
}
