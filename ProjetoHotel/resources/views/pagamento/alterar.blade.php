@extends('layouts.app')

@section('content')

<div class="container">
    @include('pagamento.__apptitulo')
    <div class="tile">
        <div class="tile-body">
    <form action="{{ url('/pagamento/update', $registro->id)}}" method="POST">
        @csrf
        @include('pagamento.__form')
        <div class="center">
            <button type="submit" class="btn btn-primary btn-lg">
                Salvar Dados do Pagamento
            </button>
            <a href="{{ url('/pagamento/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar Alteração do Pagamenot</a>
        </div>
    </form>
    </div>
    </div>
</div>  
@endsection