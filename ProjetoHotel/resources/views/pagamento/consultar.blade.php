@extends('layouts.app')
@section('content')

<div class="container">
    @include('cliente.__apptitulo')
    <div class="tile">
        <div class="tile-body">
    <form action=" {{ url('/pagamento/listar') }}" >
        @csrf
        @include('cliente.__from')
        <div class="center">
            <button type="submit" class="btn btn-primary btn-lg" value="cancel">Listar</button>
        </div>
    </form>
    </div>
    </div>
</div>  
@endsection