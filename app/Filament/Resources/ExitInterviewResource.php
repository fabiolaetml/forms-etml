<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExitInterviewResource\Pages;
use App\Filament\Resources\ExitInterviewResource\RelationManagers;
use App\Models\ExitInterview;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExitInterviewResource extends Resource
{
    protected static ?string $model = ExitInterview::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'Desligamento';
    protected static ?string $pluralModelLabel = 'Desligamento';
    protected static ?string $slug ='Desligamento';
    protected static ?string $navigationGroup ='Formulários';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\Select::make('employee_id')
                ->label('Nome')
                ->relationship('employee', 'name')
                ->required(),
            Forms\Components\Select::make('employee_id')
                ->label('CPF')
                ->relationship('employee', 'cpf')
                ->required(),
            Forms\Components\Select::make('employee_id')
                ->label('Data Desligamento')
                ->relationship('employee', 'termination_date')
                ->required(),
            Forms\Components\Select::make('employee_id')
                ->label('Unidade')
                ->relationship('companyunit', 'name')
                ->required(),
            Forms\Components\Select::make('employee_id')
                ->label('Cargo')
                ->relationship('employeerole', 'name')
                ->required()
                ->preload(),
            Forms\Components\Select::make('employee_id')
                ->label('Setor')
                ->relationship('companysector', 'name')
                ->required()
                ->preload(),
            Forms\Components\Select::make('employee_id')
                ->label('Motivo do Desligamento')
                ->relationship('employee', 'reason_termination')
                ->required(),
             // Question 1
            Forms\Components\Select::make('question1')
                ->label('1- Como foi o seu atendimento no processo seletivo?')
                ->options([
                    'RUIM' => 'RUIM',
                    'REGULAR' => 'REGULAR',
                    'BOM' => 'BOM',
                    'MUITO BOM' => 'MUITO BOM',
                ]),
            Forms\Components\Textarea::make('comment1')
                ->label('Comentário 1'),
            // Question 2
            Forms\Components\Select::make('question2')
                ->label('2- Qual a sua opinião a respeito do ambiente de
                trabalho em que você exerceu as suas atividades.')
                ->options([
                    'RUIM' => 'RUIM',
                    'REGULAR' => 'REGULAR',
                    'BOM' => 'BOM',
                    'MUITO BOM' => 'MUITO BOM',
                ]),
            Forms\Components\Textarea::make('comment2')
                ->label('Comentário 2'),
            // Question 3
            Forms\Components\Select::make('question3')
                ->label('3 - Como foi o seu relacionamento com os seus
                superiores?')
                ->options([
                    'RUIM' => 'RUIM',
                    'REGULAR' => 'REGULAR',
                    'BOM' => 'BOM',
                    'MUITO BOM' => 'MUITO BOM',
                ]),
            Forms\Components\Textarea::make('comment3')
                ->label('Comentário 3'),
               // Question 4
               Forms\Components\Select::make('question4')
               ->label('4 - Como foi o seu relacionamento com os seus
               colegas de trabalho?')
               ->options([
                   'RUIM' => 'RUIM',
                   'REGULAR' => 'REGULAR',
                   'BOM' => 'BOM',
                   'MUITO BOM' => 'MUITO BOM',
               ]),
           Forms\Components\Textarea::make('comment4')
               ->label('Comentário 4'),
               // Question 5
               Forms\Components\Select::make('question5')
               ->label('5 - O pacote salário/benefício eram satisfatórios? ')
               ->options([
                   'RUIM' => 'RUIM',
                   'REGULAR' => 'REGULAR',
                   'BOM' => 'BOM',
                   'MUITO BOM' => 'MUITO BOM',
               ]),
           Forms\Components\Textarea::make('comment5')
               ->label('Comentário 5'),
               // Question 6
               Forms\Components\Select::make('question6')
               ->label('6 - Como viu a oportunidade de promoção dentro da
               empresa?')
               ->options([
                   'RUIM' => 'RUIM',
                   'REGULAR' => 'REGULAR',
                   'BOM' => 'BOM',
                   'MUITO BOM' => 'MUITO BOM',
               ]),
           Forms\Components\Textarea::make('comment6')
               ->label('Comentário 6'),
               // Question 7
               Forms\Components\Select::make('question7')
               ->label('7- As instruções de trabalho foram passadas de forma
               fácil e compreensiva?')
               ->options([
                   'RUIM' => 'RUIM',
                   'REGULAR' => 'REGULAR',
                   'BOM' => 'BOM',
                   'MUITO BOM' => 'MUITO BOM',
               ]),
           Forms\Components\Textarea::make('comment7')
               ->label('Comentário 7'),
               // Question 8
               Forms\Components\Select::make('question8')
               ->label('8 - Qual foi a sua percepção em relação a segurança
               no ambiente de trabalho?')
               ->options([
                   'RUIM' => 'RUIM',
                   'REGULAR' => 'REGULAR',
                   'BOM' => 'BOM',
                   'MUITO BOM' => 'MUITO BOM',
               ]),
           Forms\Components\Textarea::make('comment8')
               ->label('Comentário 8'),
               // Question 9
               Forms\Components\Select::make('question9')
               ->label('9 - Qual a sua opinião em relação aos treinamentos
               oferecidos pela empresa?')
               ->options([
                   'RUIM' => 'RUIM',
                   'REGULAR' => 'REGULAR',
                   'BOM' => 'BOM',
                   'MUITO BOM' => 'MUITO BOM',
               ]),
           Forms\Components\Textarea::make('comment9')
               ->label('Comentário 9'),
               // Question 10
               Forms\Components\Select::make('question10')
               ->label('10- As atividade exercidas foram as mesmas passadas
               no ato da admissão?')
               ->options([
                   'RUIM' => 'RUIM',
                   'REGULAR' => 'REGULAR',
                   'BOM' => 'BOM',
                   'MUITO BOM' => 'MUITO BOM',
               ]),
           Forms\Components\Textarea::make('comment10')
               ->label('Comentário 10'),
               // Question 11
               Forms\Components\Select::make('question11')
               ->label('11 - A liderança do setor foi clara e objetiva ao passar
               as instruções de trabalho?')
               ->options([
                   'RUIM' => 'RUIM',
                   'REGULAR' => 'REGULAR',
                   'BOM' => 'BOM',
                   'MUITO BOM' => 'MUITO BOM',
               ]),
           Forms\Components\Textarea::make('comment11')
               ->label('Comentário 11'),
               // Question 12
               Forms\Components\Select::make('question12')
               ->label('12 - Como foi a ajuda da sua liderança perante as
               dificuldades que você encontrou?')
               ->options([
                   'RUIM' => 'RUIM',
                   'REGULAR' => 'REGULAR',
                   'BOM' => 'BOM',
                   'MUITO BOM' => 'MUITO BOM',
               ]),
           Forms\Components\Textarea::make('comment12')
               ->label('Comentário 12'),
               // Question 13
               Forms\Components\Select::make('question13')
               ->label('13- Como foi a participação da sua liderança quanto ao
               envolvimento das tarefas executadas?')
               ->options([
                   'RUIM' => 'RUIM',
                   'REGULAR' => 'REGULAR',
                   'BOM' => 'BOM',
                   'MUITO BOM' => 'MUITO BOM',
               ]),
           Forms\Components\Textarea::make('comment13')
               ->label('Comentário 13'),
           // Question 14
            Forms\Components\Select::make('question14')
            ->label('14-Você se identificava com as tarefas desenvolvidas?')
            ->options([
                'SIM' => 'SIM',
                'NAO' => 'NÃO',
            ]),
            Forms\Components\Textarea::make('comment14')
            ->label('Comentário 14'),

            // Question 15
            Forms\Components\Select::make('question15')
            ->label('15-Em outra oportunidade você voltaria a trabalhar nesta empresa?')
            ->options([
                'SIM' => 'SIM',
                'NAO' => 'NÃO',
            ]),
            Forms\Components\Textarea::make('comment15')
            ->label('Comentário 15'),

            // Question 16
            Forms\Components\Select::make('question16')
            ->label('16-Mesma função/área?')
            ->options([
                'SIM' => 'SIM',
                'NAO' => 'NÃO',
            ]),
            Forms\Components\Textarea::make('comment16')
            ->label('Comentário 16'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('employee.name')
                ->label('Nome'),
                Tables\Columns\TextColumn::make('employee.cpf')
                ->label('CPF'),
                Tables\Columns\TextColumn::make('employee.termination_date')
                ->label('Data de Desligamento'),
                Tables\Columns\TextColumn::make('employee.employeerole.name')
                ->label('Cargo'),
                Tables\Columns\TextColumn::make('employee.companyunit.name')
                ->label('Unidade'),
                Tables\Columns\TextColumn::make('employee.companysector.name')
                ->label('Setor'),
                Tables\Columns\TextColumn::make('employee.reason_termination')
                ->label('Motivo do Desligamento'),
                Tables\Columns\TextColumn::make('question1')
                ->label('Questão 1')
                ->searchable(),
                Tables\Columns\TextColumn::make('comment1')
                ->label('Comentário 1')
                ->searchable(),
                Tables\Columns\TextColumn::make('question2')
                ->label('Questão 2')
                ->searchable(),
                Tables\Columns\TextColumn::make('comment2')
                ->label('Comentário 2')
                ->searchable(),
                Tables\Columns\TextColumn::make('question3')
                ->label('Questão 3')
                ->searchable(),
                Tables\Columns\TextColumn::make('comment3')
                ->label('Comentário 3')
                ->searchable(),
                Tables\Columns\TextColumn::make('question4')
                ->label('Questão 4')
                ->searchable(),
                Tables\Columns\TextColumn::make('comment4')
                ->label('Comentário 4')
                ->searchable(),
                Tables\Columns\TextColumn::make('question5')
                ->label('Questão 5')
                ->searchable(),
                Tables\Columns\TextColumn::make('comment5')
                ->label('Comentário 5')
                ->searchable(),
                Tables\Columns\TextColumn::make('question6')
                ->label('Questão 6')
                ->searchable(),
                Tables\Columns\TextColumn::make('comment6')
                ->label('Comentário 6')
                ->searchable(),
                Tables\Columns\TextColumn::make('question7')
                ->label('Questão 7')
                ->searchable(),
                Tables\Columns\TextColumn::make('comment7')
                ->label('Comentário 7')
                ->searchable(),
                Tables\Columns\TextColumn::make('question8')
                ->label('Questão 8')
                ->searchable(),
                Tables\Columns\TextColumn::make('comment8')
                ->label('Comentário 8')
                ->searchable(),
                Tables\Columns\TextColumn::make('question9')
                ->label('Questão 9')
                ->searchable(),
                Tables\Columns\TextColumn::make('comment9')
                ->label('Comentário 9')
                ->searchable(),
                Tables\Columns\TextColumn::make('question10')
                ->label('Questão 10')
                ->searchable(),
                Tables\Columns\TextColumn::make('comment10')
                ->label('Comentário 10')
                ->searchable(),
                Tables\Columns\TextColumn::make('question11')
                ->label('Questão 11')
                ->searchable(),
                Tables\Columns\TextColumn::make('comment11')
                ->label('Comentário 11')
                ->searchable(),
                Tables\Columns\TextColumn::make('question12')
                ->label('Questão 12')
                ->searchable(),
                Tables\Columns\TextColumn::make('comment12')
                ->label('Comentário 12')
                ->searchable(),
                Tables\Columns\TextColumn::make('question13')
                ->label('Questão 13')
                ->searchable(),
                Tables\Columns\TextColumn::make('comment13')
                ->label('Comentário 13')
                ->searchable(),
                Tables\Columns\TextColumn::make('question14')
                ->label('Questão 14')
                ->searchable(),
                Tables\Columns\TextColumn::make('comment14')
                ->label('Comentário 14')
                ->searchable(),
                Tables\Columns\TextColumn::make('question15')
                ->label('Questão 15')
                ->searchable(),
                Tables\Columns\TextColumn::make('comment15')
                ->label('Comentário 15')
                ->searchable(),
                Tables\Columns\TextColumn::make('question16')
                ->label('Questão 16')
                ->searchable(),
                Tables\Columns\TextColumn::make('comment16')
                ->label('Comentário 16')
                ->searchable(),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExitInterviews::route('/'),
            'create' => Pages\CreateExitInterview::route('/create'),
            'edit' => Pages\EditExitInterview::route('/{record}/edit'),
        ];
    }
}
