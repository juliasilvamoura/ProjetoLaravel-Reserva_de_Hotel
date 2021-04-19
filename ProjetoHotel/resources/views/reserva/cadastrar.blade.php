@extends('layouts.app')

@section('content')

<div class="container">
    @include('reserva.__apptitulo')
    <div class="tile">
        <div class="tile-body">
    <form action="{{ url('/reserva/salvar')}}" method="POST">
        @csrf
        @include('reserva.__form')
        <div class="center">
            <button type="submit" class="btn btn-primary btn-lg">
                Salvar Dados do Reserva
            </button>
            <a href="{{ url('/reserva/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar Inclusão do Reserva</a>
        </div>
    </form>
        </div>
    </div>
</div>  
@endsection