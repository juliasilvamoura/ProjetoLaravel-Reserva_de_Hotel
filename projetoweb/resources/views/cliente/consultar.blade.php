@extends('layouts.app')

@section('content')

<div class="container">
    <div class="tile">
        <div class="tile-body">
    <form>
        @csrf
        @include('cliente.__apptitulo')
        <div class="center">
            <button type="submit" class="btn btn-primary btn-lg">
                Salvar Dados do Cliente
            </button>
            <a href="{{ url('/cliente/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar Consulta do Cliente</a>
        </div>
    </form>
    </div>
    </div>
</div>  
@endsection