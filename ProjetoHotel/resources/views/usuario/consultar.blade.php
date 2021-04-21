@extends('layouts.app')
@section('content')

<div class="container">
    @include('usuario.__apptitulo')
    <div class="tile">
        <div class="tile-body">
    <form action=" {{ url('/usuario/listar') }}" >
        @csrf
        @include('usuario.__from')
        <div class="center">
            <button type="submit" class="btn btn-primary btn-lg" value="cancel">Listar</button>
        </div>
    </form>
    </div>
    </div>
</div>  
@endsection