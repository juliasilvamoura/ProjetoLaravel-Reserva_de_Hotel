@extends('layouts.app')

@section('content')

<div class="container">
    @include('quarto.__apptitulo')
    <div class="tile">
        <div class="tile-body">
    <form action="{{ url('/quarto/salvar')}}" method="POST">
        @csrf
        @include('quarto.__form')
        <div class="center">
            <button type="submit" class="btn btn-primary btn-lg">
                Salvar Dados do Quarto
            </button>
            <a href="{{ url('/quarto/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar Inclusão do Quarto</a>
        </div>
    </form>
        </div>
    </div>
</div>  
@endsection