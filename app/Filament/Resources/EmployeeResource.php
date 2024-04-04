<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeResource\Pages;
use App\Models\Employee;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput\Mask;
use Filament\Forms\Components\TextInput;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'Funcionário';
    protected static ?string $pluralModelLabel = 'Funcionários';
    protected static ?string $slug ='Funcionario';
    protected static ?string $navigationGroup ='Cadastros';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->label('Nome')
                ->required()
                ->maxLength(255),
            Forms\Components\Select::make('companyunit_id')
                ->label('Unidade')
                ->relationship('companyunit', 'name')
                ->required()
                ->preload(),
            Forms\Components\Select::make('employeerole_id')
                ->label('Cargo')
                ->relationship('employeerole', 'name')
                ->required()
                ->preload(),
            Forms\Components\Select::make('companysector_id')
                ->label('setor')
                ->relationship('companysector', 'name')
                ->required()
                ->preload(),
            Forms\Components\DatePicker::make('termination_date')
                ->label('Data do Desligamento')
                ->required(),
            Forms\Components\TextInput::make('cpf')
                ->label('CPF')
                ->rule('cpf')
                ->required()
                ->maxLength(255)
                ->maxLength(14)
               ->mask ('000.000.000-00')
               ->placeholder ('000.000.000-00'),
            Forms\Components\TextInput::make('reason_termination')
                ->label('Motivo do Desligamento')
                ->required()
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('termination_date')
                    ->label('Data do Desligamento')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cpf')
                    ->label('CPF')
                    ->searchable(),
                Tables\Columns\TextColumn::make('reason_termination')
                    ->label('Motivo do Desligamento')
                    ->searchable(),
                Tables\Columns\TextColumn::make('employeerole.name')
                    ->label('Cargo')
                    ->sortable(),
                Tables\Columns\TextColumn::make('companyunit.name')
                    ->label('Unidade')
                    ->sortable(),
                Tables\Columns\TextColumn::make('companysector.name')
                    ->label('Setor')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Atualizado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }
}


