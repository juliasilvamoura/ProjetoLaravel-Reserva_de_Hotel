@extends('layouts.app')
@section('content')
<div class="container">
    @include('pagamento.__apptitulo')
    <div class="tile">
        <div class="tile-body">
    <form action="{{ url('/pagamento/excluir', $registro->id) }}" method="POST">
        @csrf
        @include('pagamento.__form')
        <input type="hidden" id="id">
        <div class="center">
            <button type="submit" class="btn btn-primary btn-lg">Excluir</button>
            <a href="{{ url('/pagamento/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar Exclusão do Pagamento</a>
        </div>
    </form>
    </div>
    </div>
</div>  
@endsection