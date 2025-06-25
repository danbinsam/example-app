<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HousekeepingResource\Pages;
use App\Filament\Resources\HousekeepingResource\RelationManagers;
use App\Models\Housekeeping;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\CheckboxList;

class HousekeepingResource extends Resource
{
    protected static ?string $model = Housekeeping::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationLabel = 'House Keeping';
    protected static ?string $pluralLabel = 'House Keeping';
    protected static ?string $modelLabel = 'House Keeping';

    protected static ?int $navigationSort = 3;

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
                Forms\Components\Grid::make(3)
                ->schema([
                    Forms\Components\Select::make('id_karyawan')
                        ->relationship('karyawan', 'nama')
                        ->label('Nama')
                        ->required(),
                    Forms\Components\Select::make('id_tempat')
                        ->relationship('tempat', 'nama')
                        ->label('Tipe Camp')
                        ->required(),
                    Forms\Components\Select::make('sop')
                        ->options([
                            'check in' => 'Check In',
                            'check out' => 'Check Out',
                        ])
                        ->required(),
                ]),
                Forms\Components\Grid::make(3)
                ->schema([
                    CheckboxList::make('kamar_mandi')
                    ->options([
                        'sop 1' => 'SOP kamar mandi 01',
                        'sop 2' => 'SOP kamar mandi 02',
                        'sop 3' => 'SOP kamar mandi 03',
                        'sop 4' => 'SOP kamar mandi 04',
                        'sop 5' => 'SOP kamar mandi 05',
                    ])
                    ->label('Kamar Mandi')
                    ->required(),
                    CheckboxList::make('ruang_kamar')
                    ->options([
                        'sop 1' => 'SOP ruang kamar 01',
                        'sop 2' => 'SOP ruang kamar 02',
                        'sop 3' => 'SOP ruang kamar 03',
                        'sop 4' => 'SOP ruang kamar 04',
                        'sop 5' => 'SOP ruang kamar 05',
                    ])
                    ->label('Ruang Kamar')
                    ->required(),
                ]),
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
                Tables\Columns\TextColumn::make('sop')
                    ->label('SOP')
                    ->formatStateUsing(fn ($state) => ucfirst($state)),
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
            'index' => Pages\ListHousekeepings::route('/'),
            'create' => Pages\CreateHousekeeping::route('/create'),
            'edit' => Pages\EditHousekeeping::route('/{record}/edit'),
        ];
    }
}
