<?php

namespace App\Filament\Pages;

use App\Models\Project;
use App\Settings\PageHomeSettings;
use BackedEnum;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
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

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Página Inicial';

    protected static ?string $title = 'Página Inicial';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Tabs')
                    ->columnSpanFull()
                    ->persistTabInQueryString()
                    ->tabs([
                        Tab::make('Banner')
                            ->icon(Heroicon::OutlinedPhoto)
                            ->schema([
                                TextInput::make('banner_tag')
                                    ->label('Tag (selo acima do título)')
                                    ->placeholder('Ex.: Soluções digitais para o seu negócio')
                                    ->prefixIcon(Heroicon::OutlinedSparkles)
                                    ->required(),
                                Grid::make(2)->schema([
                                    TextInput::make('banner_title_first')
                                        ->label('Primeiro título')
                                        ->placeholder('Ex.: Transforme sua presença online')
                                        ->prefixIcon(Heroicon::OutlinedTag)
                                        ->required(),
                                    TextInput::make('banner_title_second')
                                        ->label('Segundo título (em destaque)')
                                        ->placeholder('Ex.: Com um site personalizado')
                                        ->prefixIcon(Heroicon::OutlinedTag)
                                        ->required(),
                                ]),
                                Textarea::make('banner_description')
                                    ->label('Descrição')
                                    ->placeholder('Texto de apoio exibido abaixo do título.')
                                    ->rows(3)
                                    ->required(),
                                FileUpload::make('banner_image')
                                    ->label('Imagem (opcional)')
                                    ->helperText('Se nenhuma imagem for enviada, uma imagem padrão é usada automaticamente.')
                                    ->image()
                                    ->imageEditor()
                                    ->disk('public')
                                    ->visibility('public'),
                            ]),
                        Tab::make('Nossos Serviços')
                            ->icon(Heroicon::OutlinedSparkles)
                            ->schema([
                                TextInput::make('section_service_title')
                                    ->label('Título da seção')
                                    ->prefixIcon(Heroicon::OutlinedTag)
                                    ->required(),
                                Textarea::make('section_service_description')
                                    ->label('Descrição da seção')
                                    ->rows(2),
                                Repeater::make('services')
                                    ->label('Serviços')
                                    ->addActionLabel('Adicionar serviço')
                                    ->reorderable()
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                                    ->schema([
                                        TextInput::make('name')
                                            ->label('Nome')
                                            ->placeholder('Ex.: Desenvolvimento de site')
                                            ->required(),
                                        Textarea::make('description')
                                            ->label('Descrição')
                                            ->rows(2)
                                            ->required(),
                                    ]),
                            ]),
                        Tab::make('Nossos Cases')
                            ->icon(Heroicon::OutlinedRectangleStack)
                            ->schema([
                                CheckboxList::make('cases')
                                    ->label('Cases em destaque')
                                    ->helperText('Escolha os projetos que aparecem na seção de cases da página inicial.')
                                    ->options(Project::orderBy('name', 'asc')->pluck('name', 'id'))
                                    ->columns(2)
                                    ->searchable()
                                    ->required(),
                            ]),
                        Tab::make('Estatísticas')
                            ->icon(Heroicon::OutlinedChartBar)
                            ->schema([
                                Repeater::make('stats')
                                    ->label('Indicadores')
                                    ->addActionLabel('Adicionar indicador')
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => trim(($state['value'] ?? '') . ' ' . ($state['label'] ?? '')) ?: null)
                                    ->minItems(1)
                                    ->maxItems(8)
                                    ->schema([
                                        Grid::make(3)->schema([
                                            TextInput::make('value')
                                                ->label('Número')
                                                ->helperText('Ex.: +30, 100%, 3 meses')
                                                ->required(),
                                            TextInput::make('label')
                                                ->label('Descrição')
                                                ->helperText('Ex.: Projetos entregues')
                                                ->required(),
                                            Select::make('icon')
                                                ->label('Ícone')
                                                ->options([
                                                    'rocket' => 'Foguete',
                                                    'clock' => 'Relógio',
                                                    'shield' => 'Escudo',
                                                    'monitor' => 'Monitor / Tela',
                                                    'star' => 'Estrela',
                                                    'users' => 'Pessoas',
                                                    'trophy' => 'Troféu',
                                                    'chart' => 'Gráfico',
                                                ])
                                                ->default('rocket')
                                                ->required(),
                                        ]),
                                    ]),
                            ]),
                        Tab::make('Valores')
                            ->icon(Heroicon::OutlinedCurrencyDollar)
                            ->schema([
                                TextInput::make('prices_section_title')
                                    ->label('Título da seção')
                                    ->prefixIcon(Heroicon::OutlinedTag)
                                    ->required(),
                                Textarea::make('prices_section_description')
                                    ->label('Descrição da seção')
                                    ->rows(2),
                                Repeater::make('prices')
                                    ->label('Planos / Valores')
                                    ->addActionLabel('Adicionar plano')
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                                    ->schema([
                                        Grid::make(2)->schema([
                                            TextInput::make('name')
                                                ->label('Nome')
                                                ->required(),
                                            TextInput::make('tagline')
                                                ->label('Subtítulo'),
                                            TextInput::make('price')
                                                ->label('Preço')
                                                ->prefixIcon(Heroicon::OutlinedCurrencyDollar)
                                                ->helperText('Ex.: R$ 890,00 ou "Sob consulta"')
                                                ->required(),
                                            TextInput::make('note')
                                                ->label('Observação')
                                                ->helperText('Ex.: pagamento único'),
                                        ]),
                                        Toggle::make('featured')
                                            ->label('Destacar como "Mais popular"')
                                            ->onColor('success')
                                            ->inline(false),
                                        Repeater::make('features')
                                            ->label('Itens inclusos')
                                            ->addActionLabel('Adicionar item')
                                            ->simple(
                                                TextInput::make('name')
                                                    ->label('Item')
                                                    ->required()
                                            ),
                                    ]),
                            ]),
                        Tab::make('Planos de Continuidade')
                            ->icon(Heroicon::OutlinedArrowPath)
                            ->schema([
                                TextInput::make('continuity_section_title')
                                    ->label('Título da seção')
                                    ->prefixIcon(Heroicon::OutlinedTag)
                                    ->required(),
                                Textarea::make('continuity_section_description')
                                    ->label('Descrição da seção')
                                    ->rows(2),
                                Repeater::make('continuity_plans')
                                    ->label('Planos mensais')
                                    ->addActionLabel('Adicionar plano')
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                                    ->schema([
                                        Grid::make(2)->schema([
                                            TextInput::make('name')
                                                ->label('Nome')
                                                ->required(),
                                            TextInput::make('tagline')
                                                ->label('Subtítulo'),
                                            TextInput::make('price')
                                                ->label('Preço')
                                                ->prefixIcon(Heroicon::OutlinedCurrencyDollar)
                                                ->helperText('Ex.: R$ 39,90')
                                                ->required(),
                                            TextInput::make('period')
                                                ->label('Período')
                                                ->helperText('Ex.: /mês'),
                                        ]),
                                        Toggle::make('featured')
                                            ->label('Destacar como "Recomendado"')
                                            ->onColor('success')
                                            ->inline(false),
                                        Repeater::make('features')
                                            ->label('Itens inclusos')
                                            ->addActionLabel('Adicionar item')
                                            ->simple(
                                                TextInput::make('name')
                                                    ->label('Item')
                                                    ->required()
                                            ),
                                    ]),
                                TextInput::make('continuity_notice_title')
                                    ->label('Título do aviso (domínio)')
                                    ->prefixIcon(Heroicon::OutlinedTag)
                                    ->required(),
                                Textarea::make('continuity_notice_text')
                                    ->label('Texto do aviso (domínio)')
                                    ->helperText('A palavra "Registro.BR" vira link automaticamente.')
                                    ->rows(3)
                                    ->required(),
                            ]),
                        Tab::make('Depoimentos')
                            ->icon(Heroicon::OutlinedChatBubbleLeftRight)
                            ->schema([
                                Toggle::make('show_testimonials')
                                    ->label('Exibir a seção de depoimentos no site')
                                    ->helperText('Desative para ocultar a seção "Depoimentos" (e o item do menu) em todas as páginas.')
                                    ->onColor('success')
                                    ->default(true)
                                    ->inline(false),
                            ]),
                    ]),
            ]);
    }
}
