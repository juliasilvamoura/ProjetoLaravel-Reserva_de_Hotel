@extends('layouts.app')

@section('content')

<div class="container">
    @include('pagamento.__apptitulo')
    <div class="tile">
        <div class="tile-body">
    <form action="{{ url('/pagamento/salvar')}}" method="POST">
        @csrf
        @include('pagamento.__form')
        <div class="center">
            <button type="submit" class="btn btn-primary btn-lg">
                Salvar Dados do Pagamento
            </button>
            <a href="{{ url('/pagamento/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar Inclusão do Pagamento</a>
        </div>
    </form>
        </div>
    </div>
</div>  
@endsection