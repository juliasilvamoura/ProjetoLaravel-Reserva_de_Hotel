@extends('layouts.app')

@section('content')

<div class="container">
    <div class="tile">
        <div class="tile-body">
    <form action="{{ url('/cliente/excluir', $registro->id) }}" method="POST">
        @csrf
        @include('cliente.__apptitulo')
        <div class="center">
            <button type="submit" class="btn btn-primary btn-lg">
                Salvar Dados do Cliente
            </button>
            <a href="{{ url('/cliente/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar Exclusão do Cliente</a>
        </div>
    </form>
    </div>
    </div>
</div>  
@endsection