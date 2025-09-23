@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Agendamento</h1>
    <form action="{{ route('agendamentos.update', $agendamento) }}" method="POST">
        @csrf @method('PUT')
        @include('agendamentos.partials.form')
        <button type="submit" class="btn btn-success">Atualizar</button>
    </form>
</div>
@endsection
