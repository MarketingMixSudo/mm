<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Partner;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PartnerResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PartnerResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class PartnerResource extends Resource
{
    protected static ?string $model = Partner::class;

    protected static ?string $navigationIcon = 'lucide-handshake';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Forms\Components\TextInput::make('name')
                    ->label('Nazwa firmy')
                    ->minLength(3)
                    ->maxLength(255)
                    ->required(),

                Forms\Components\FileUpload::make('logo')
                    ->label('Logo')
                    ->directory('partnerzy')
                    ->getUploadedFileNameForStorageUsing(
                        fn(TemporaryUploadedFile $file): string => 'logo-' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
                    )
                    ->image()
                    ->maxSize(8192)
                    ->optimize('webp')
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        null,
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->reorderable('sort')
            ->defaultSort('sort', 'asc')
            ->columns([
                Tables\Columns\TextColumn::make('sort')
                    ->label('#')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\ImageColumn::make('logo')
                    ->label('Miniaturka')
                    ->circular(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Nazwa')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListPartners::route('/'),
            'create' => Pages\CreatePartner::route('/create'),
            'edit' => Pages\EditPartner::route('/{record}/edit'),
        ];
    }


       public static function getNavigationLabel(): string
    {
        return ('Logo');
    }
    public static function getPluralLabel(): string
    {
        return ('Loga');
    }

    public static function getLabel(): string
    {
        return ('Logo');
    }
}
