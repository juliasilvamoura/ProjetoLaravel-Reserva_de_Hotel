@extends('layouts.app')
@section('content')

<div class="container">
    @include('reserva.__apptitulo')
    <div class="tile">
        <div class="tile-body">
    <form action=" {{ url('/reserva/listar') }}" >
        @csrf
        @include('reserva.__from')
        <div class="center">
            <button type="submit" class="btn btn-primary btn-lg" value="cancel">Listar</button>
        </div>
    </form>
    </div>
    </div>
</div>  
@endsection