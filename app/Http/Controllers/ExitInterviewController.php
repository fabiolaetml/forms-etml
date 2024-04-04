<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\ExitInterview;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Filament\Resources\ExitInterviewResource;
use Filament\Forms\Form;
use Filament\Forms\ComponentContainer;

class ExitInterviewController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function showExitInterviewForm()
    {
        $container = new ComponentContainer(); // Crie uma instância de ComponentContainer
        $form = ExitInterviewResource::form(new Form($container)); // Passe a instância de ComponentContainer para o construtor de Form
        return view('exit-interview-form', compact('form'));
    }
    

    public function processExitInterviewForm(Request $request)
    {
        $validatedData = $request->validate([
            // Valide os dados do formulário de entrevista de saída aqui
        ]);

        // Processar os dados do formulário e salvar no banco de dados, por exemplo:
        $exitInterview = ExitInterview::create($validatedData);

        return redirect()->back()->with('success', 'Entrevista de saída registrada com sucesso!');
    }

    public function showResponse()
    {
        // Lógica para exibir a resposta da entrevista de saída
        $interviews = ExitInterview::all();
        return view('exit-interview-response', compact('interviews'));
    }

    public function showExternalForm(Request $request)
    {
        $employee = null;
        $cpf = $request->input('cpf');
        $employee = Employee::where('cpf', $cpf)->first();

        if ($employee) {
            return view('exit-interview-form', compact('employee'));
        } else {
            return redirect()->back()->with('error', 'Funcionário não encontrado para o CPF fornecido.');
        }
    }
}
