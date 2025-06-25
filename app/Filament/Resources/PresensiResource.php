<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PresensiResource\Pages;
use App\Filament\Resources\PresensiResource\RelationManagers;
use App\Models\Presensi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PresensiResource extends Resource
{
    protected static ?string $model = Presensi::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    protected static ?string $navigationLabel = 'Presensi';
    protected static ?string $pluralLabel = 'Presensi';
    protected static ?string $modelLabel = 'Presensi';

    protected static ?int $navigationSort = 1;

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
                Forms\Components\Select::make('id_jadwal')
                    ->relationship('jadwal', 'nama')
                    ->label('jadwal')
                    ->required(),
                Forms\Components\TimePicker::make('datang')
                    ->label('Waktu Datang')
                    ->required(),
                Forms\Components\TimePicker::make('pulang')
                    ->label('Waktu Pulang'),
                Forms\Components\FileUpload::make('foto_datang')
                    ->image()
                    ->label('Foto Datang')
                    ->required()
                    ->minSize(24)
                    ->maxSize(5120)
                    ->required(),
                Forms\Components\FileUpload::make('foto_pulang')
                    ->image()
                    ->label('Foto Pulang')
                    ->minSize(24)
                    ->maxSize(5120),
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
                Tables\Columns\TextColumn::make('jadwal.nama')
                    ->label('Jadwal'),
                Tables\Columns\TextColumn::make('datang')
                    ->label('Datang'),
                Tables\Columns\TextColumn::make('pulang')
                    ->label('Pulang'),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(fn ($state) => ucfirst($state)),
            ])
            ->defaultSort('tanggal', 'desc')
            ->filters([
                //
                Tables\Filters\SelectFilter::make('status')
                ->options([
                    'hadir' => 'Hadir',
                    'terlambat' => 'Terlambat',
                ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListPresensis::route('/'),
            'create' => Pages\CreatePresensi::route('/create'),
            'edit' => Pages\EditPresensi::route('/{record}/edit'),
        ];
    }
}
