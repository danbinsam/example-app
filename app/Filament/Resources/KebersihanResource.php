<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KebersihanResource\Pages;
use App\Filament\Resources\KebersihanResource\RelationManagers;
use App\Models\Kebersihan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KebersihanResource extends Resource
{
    protected static ?string $model = Kebersihan::class;

    protected static ?string $navigationIcon = 'heroicon-o-trash';

    protected static ?string $navigationLabel = 'Kebersihan';
    protected static ?string $pluralLabel = 'Kebersihan';
    protected static ?string $modelLabel = 'Kebersihan';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\DatePicker::make('tanggal')
                    ->label('Tanggal')
                    ->default(now())
                    ->columnSpan(2)
                    ->required(),
                Forms\Components\Select::make('id_karyawan')
                    ->relationship('karyawan', 'nama')
                    ->label('Nama')
                    ->required(),
                Forms\Components\Select::make('id_tempat')
                    ->relationship('tempat', 'nama')
                    ->label('Tempat')
                    ->required(),
                Forms\Components\Textarea::make('catatan')
                    ->label('Catatan')
                    ->columnSpanFull()
                    //->maxLength(255)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('tanggal')
                    ->label('Tanggal'),
                Tables\Columns\TextColumn::make('karyawan.nama')
                    ->searchable()
                    ->label('Nama'),
                Tables\Columns\TextColumn::make('tempat.nama')
                    ->label('Tempat'),
                Tables\Columns\TextColumn::make('catatan')
                    ->label('Catatan')
                    ->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
            'index' => Pages\ListKebersihans::route('/'),
            'create' => Pages\CreateKebersihan::route('/create'),
            'edit' => Pages\EditKebersihan::route('/{record}/edit'),
        ];
    }
}
