<?php

namespace App\Livewire;

use App\Models\Employee;
use App\Models\CompanyUnit;
use App\Models\EmployeeRole;
use App\Models\CompanySector;
use App\Models\ExitInterview;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreateExitInterview extends Component implements HasForms
{
    use InteractsWithForms;

    public $form;
    use InteractsWithForms;

    public $title;
    public $slug;
    public $content;

    public function mount(): void
    {
        $this->form = new Form($this); // Inicializa $this->form com a instância de HasForms
        if ($this->form) {
            $this->form->fill(); // Preenche o formulário, se necessário
        }
    }


    public function form(Form $form): Form
{
    return $form
        ->schema([
            TextInput::make('title'),
            TextInput::make('slug'),
            RichEditor::make('content'),
        ]);
}
    public function create(): void
    {
        ExitInterview::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
        ]);
    }

    public function render(): View
    {
        return view('livewire.exit-interview');
    }
}

