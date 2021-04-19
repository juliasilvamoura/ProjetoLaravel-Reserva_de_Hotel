@extends('layouts.app')

@section('content')

<div class="container">
    @include('cliente.__apptitulo')
    <div class="tile">
        <div class="tile-body">
    <form action="{{ url('/cliente/salvar')}}" method="POST">
        @csrf
        @include('cliente.__form')
        <div class="center">
            <button type="submit" class="btn btn-primary btn-lg">
                Salvar Dados do Cliente
            </button>
            <a href="{{ url('/cliente/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar Inclusão do Cliente</a>
        </div>
    </form>
        </div>
    </div>
</div>  
@endsection