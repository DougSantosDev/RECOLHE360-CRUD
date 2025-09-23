@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agendamentos</h1>
    <a href="{{ route('agendamentos.create') }}" class="btn btn-primary">Novo Agendamento</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Material</th>
                <th>Endereço</th>
                <th>Data Coleta</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($agendamentos as $agendamento)
            <tr>
                <td>{{ $agendamento->id }}</td>
                <td>{{ $agendamento->material->nome }}</td>
                <td>{{ $agendamento->endereco }}</td>
                <td>{{ $agendamento->data_coleta }}</td>
                <td>
                    <a href="{{ route('agendamentos.edit', $agendamento) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('agendamentos.destroy', $agendamento) }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
