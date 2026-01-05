<?php

namespace App\Filament\Resources\Niches\RelationManagers;

use App\Filament\Resources\Niches\NicheResource;
use App\Filament\Resources\Resources\ResourceResource;
use App\Models\Resource;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class ResourcesRelationManager extends RelationManager
{
    protected static string $relationship = 'resources';

    protected static ?string $title = 'Recursos';

    // protected static ?string $relatedResource = NicheResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->heading(ResourceResource::getPluralModelLabel())
            ->reorderable('order')
            ->paginated(false)
            ->headerActions([
                Action::make('createResource')
                    ->label(ResourceResource::getModelLabel())
                    ->modalHeading('Novo ' . ResourceResource::getModelLabel())
                    ->modalSubmitActionLabel('Criar')
                    ->icon('heroicon-o-plus')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nome')
                            ->required(),
                        Repeater::make('plans')
                            ->label('Planos')
                            ->columns(3)
                            ->schema([
                                Select::make('name')
                                    ->label('Nome')
                                    ->options([
                                        'Essencial' => 'Essencial',
                                        'Completo' => 'Completo',
                                        'Premium' => 'Premium'
                                    ]),
                                Select::make('type')
                                    ->label('Tipo')
                                    ->live()
                                    ->options([
                                        'text' => 'Texto',
                                        'check' => 'Check'
                                    ]),
                                TextInput::make('value')
                                    ->label('Valor')
                                    ->visible(fn(Get $get): bool => $get('type') == 'text' ? true : false),
                                Select::make('value')
                                    ->label('Valor')
                                    ->visible(fn(Get $get): bool => $get('type') == 'check' ? true : false)
                                    ->options([
                                        'false' => 'Não',
                                        'true' => 'Sim'
                                    ])
                            ])
                    ])
                    ->action(function (array $data) {
                        $data['niche_id'] = $this->ownerRecord->id;

                        Resource::create($data);
                    })
                    ->successNotificationTitle('Recurso criado com sucesso!'),
            ])
            ->columns([
                TextColumn::make('name')
                    ->label('Nome'),
                TextColumn::make('order')
                    ->label('Ordem'),
            ])
            ->defaultSort('order', 'asc')
            ->recordActions([
                EditAction::make()
                    ->iconButton()
                    ->url(function (Model $record): string {
                        return ResourceResource::getUrl('edit', ['record' => $record]);
                    }),
                DeleteAction::make()
                    ->iconButton()
            ]);
    }
}
