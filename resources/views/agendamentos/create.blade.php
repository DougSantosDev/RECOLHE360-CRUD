@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Novo Agendamento</h1>
    <form action="{{ route('agendamentos.store') }}" method="POST">
        @csrf
        @include('agendamentos.partials.form')
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection
