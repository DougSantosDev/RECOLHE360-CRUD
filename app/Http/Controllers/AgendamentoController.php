<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Material;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function index()
    {
        $agendamentos = Agendamento::with('material')->get();
        return view('agendamentos.index', compact('agendamentos'));
    }

    public function create()
    {
        $materials = Material::all();
        return view('agendamentos.create', compact('materials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'material_id' => 'required|exists:materials,id',
            'endereco' => 'required|string|max:255',
            'data_coleta' => 'required|date',
        ]);

        Agendamento::create($request->all());

        return redirect()->route('agendamentos.index')->with('success', 'Agendamento criado com sucesso!');
    }

    public function edit(Agendamento $agendamento)
    {
        $materials = Material::all();
        return view('agendamentos.edit', compact('agendamento', 'materials'));
    }

    public function update(Request $request, Agendamento $agendamento)
    {
        $request->validate([
            'material_id' => 'required|exists:materials,id',
            'endereco' => 'required|string|max:255',
            'data_coleta' => 'required|date',
        ]);

        $agendamento->update($request->all());

        return redirect()->route('agendamentos.index')->with('success', 'Agendamento atualizado com sucesso!');
    }

    public function destroy(Agendamento $agendamento)
    {
        $agendamento->delete();
        return redirect()->route('agendamentos.index')->with('success', 'Agendamento excluído!');
    }
}
