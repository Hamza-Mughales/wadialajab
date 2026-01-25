<?php

namespace App\Filament\Resources\Applications;

use App\Enums\ApplicationStatus;
use App\Filament\Resources\Applications\Pages\CreateApplication;
use App\Filament\Resources\Applications\Pages\EditApplication;
use App\Filament\Resources\Applications\Pages\ListApplications;
use App\Models\Application;
use BackedEnum;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ApplicationResource extends Resource
{
    protected static ?string $model = Application::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $recordTitleAttribute = 'name';

    public static function getNavigationLabel(): string
    {
        return __('application.resource.navigation_label');
    }

    public static function getModelLabel(): string
    {
        return __('application.resource.label');
    }

    public static function getPluralModelLabel(): string
    {
        return __('application.resource.plural_label');
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('application.sections.applicant_info'))
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->label(__('application.fields.name'))
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('phone')
                                    ->label(__('application.fields.phone'))
                                    ->required()
                                    ->maxLength(50),

                                Textarea::make('description')
                                    ->label(__('application.fields.description'))
                                    ->required()
                                    ->columnSpanFull()
                                    ->rows(5),
                            ]),
                    ])
                    ->collapsible(),

                Section::make(__('application.sections.admin_actions'))
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Select::make('status')
                                    ->label(__('application.fields.status'))
                                    ->options(ApplicationStatus::class)
                                    ->required()
                                    ->native(false),

                                DatePicker::make('reviewed_at')
                                    ->label(__('application.fields.reviewed_at'))
                                    ->default(now())
                                    ->displayFormat('Y-m-d')
                                    ->native(false),

                                Textarea::make('admin_notes')
                                    ->label(__('application.fields.admin_notes'))
                                    ->rows(5)
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->collapsible(),

                Section::make(__('application.fields.files'))
                    ->schema([
                        FileUpload::make('files')
                            ->label(__('application.fields.files'))
                            ->disk('local')
                            ->directory('applications')
                            ->visibility('private')
                            ->multiple()
                            ->downloadable()
                            ->openable()
                            ->panelLayout('grid'),
                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('#')
                    ->sortable(),

                TextColumn::make('name')
                    ->label(__('application.fields.name'))
                    ->searchable()
                    ->sortable(),

                TextColumn::make('phone')
                    ->label(__('application.fields.phone'))
                    ->searchable(),

                TextColumn::make('status')
                    ->label(__('application.fields.status'))
                    ->badge()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label(__('application.fields.created_at'))
                    ->dateTime('Y-m-d')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label(__('application.fields.status'))
                    ->options(ApplicationStatus::class),
            ])
            ->recordActions([
                // ViewAction::make(),
                // EditAction::make(),
            ])
            ->toolbarActions([
                // DeleteBulkAction::make(),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListApplications::route('/'),
            'create' => CreateApplication::route('/create'),
            'edit' => EditApplication::route('/{record}/edit'),
        ];
    }
}
