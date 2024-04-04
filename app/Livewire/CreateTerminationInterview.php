<?php

namespace App\Livewire;

use App\Models\Employee;
use App\Models\ExitInterview;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\Select;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Symfony\Contracts\Service\Attribute\Required;


class CreateTerminationInterview extends Component implements HasForms
{
    use InteractsWithForms;
    

    public ?array $data = [];
    public $cpf;
    public $employeeName;
    public $employee;
    public $terminationDate;
    public $unit;
    public $role;
    public $sector;
    public $question1 = '';
    public $comment1;
    public $question2 = '';
    public $comment2;
    public $question3 = '';
    public $comment3;
    public $question4 = '';
    public $comment4;
    public $question5 = '';
    public $comment5;
    public $question6 = '';
    public $comment6;
    public $question7 = '';
    public $comment7;
    public $question8 = '';
    public $comment8;
    public $question9 = '';
    public $comment9;
    public $question10 = '';
    public $comment10;
    public $question11 = '';
    public $comment11;
    public $question12 = '';
    public $comment12;
    public $question13 = '';
    public $comment13;
    public $question14 = '';
    public $comment14;
    public $question15 = '';
    public $comment15;
    public $question16 = '';
    public $comment16;

    public function mount(): void
    {
        $this->form->fill([
            'employee_name' => $this->employeeName ?? '',
            'termination_date' => optional($this->employee)->termination_date ?? '',
        ]);
    }
    
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                
            ])
            ->statePath('data');
    }

    public function updatedCpf($value)
    {
        if ($value) {
            $this->employee = Employee::where('cpf', $value)->first();
            if ($this->employee) {
                $this->employeeName = $this->employee->name;
                $this->terminationDate = $this->employee->termination_date;

                $this->unit = $this->employee->companyunit->name;
                $this->role = $this->employee->employeerole->name;
                $this->sector = $this->employee->companysector->name;
            } else {
                $this->employeeName = null;
                $this->terminationDate = null;
                $this->unit = null;
                $this->role = null;
                $this->sector = null;
            }
        } else {
            $this->employeeName = null;
            $this->terminationDate = null;
            $this->unit = null;
            $this->role = null;
            $this->sector = null;
        }
    }
    
    public function create(): void
    {
        $employeeId = $this->employee->id;


        ExitInterview::create([
            'employee_id' => $employeeId,
            'question1' => $this->question1,
            'comment1' => $this->comment1,
            'question2' => $this->question2,
            'comment2' => $this->comment2,
            'question3' => $this->question3,
            'comment3' => $this->comment3,
            'question4' => $this->question4,
            'comment4' => $this->comment4,
            'question5' => $this->question5,
            'comment5' => $this->comment5,
            'question6' => $this->question6,
            'comment6' => $this->comment6,
            'question7' => $this->question7,
            'comment7' => $this->comment7,
            'question8' => $this->question8,
            'comment8' => $this->comment8,
            'question9' => $this->question9,
            'comment9' => $this->comment9,
            'question10' => $this->question10,
            'comment10' => $this->comment10,
            'question11' => $this->question11,
            'comment11' => $this->comment11,
            'question12' => $this->question12,
            'comment12' => $this->comment12,
            'question13' => $this->question13,
            'comment13' => $this->comment13,
            'question14' => $this->question14,
            'comment14' => $this->comment14,
            'question15' => $this->question15,
            'comment15' => $this->comment15,
            'question16' => $this->question16,
            'comment16' => $this->comment16,
        ]);
    }
    
    public function render(): View
    {
        return view('livewire.create-termination-interview');
    }

    public function getHeading(): string
    {
        return 'Create Termination Interview'; // Pode ser substituído pelo título desejado
    }
}