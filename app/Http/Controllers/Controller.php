<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Filament\Forms\Form;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

}

class EmployeeController extends Controller
{
    public function store(Request $request)
    {
        // Valide os dados da solicitação
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'termination_date' => 'required|date',
            'cpf' => 'required|string|max:255',
            'reason_termination' => 'required|string|max:255',
            'employeerole_id' => 'required|exists:employeeroles,id',
            'companyunit_id' => 'required|exists:companyunits,id',
        ]);

        // Crie um novo funcionário com os dados validados
        $employee = Employee::create($validatedData);

        // Redirecione para algum lugar após a criação bem-sucedida
        return redirect()->route('employees.index')->with('success', 'Funcionário criado com sucesso!');
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id); // Busca o funcionário pelo ID
        
        return view('employee.show', compact('employee')); // Passa o funcionário para a visualização
    }

}


