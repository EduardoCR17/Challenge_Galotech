@extends('layouts.app')

@section('title', 'EDITAR TIPO CAMBIO')

@section('content')
<h2>Editar Tipo Cambio</h2>
@if ($errors->any())
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }} </li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<form action="{{ url('tipo-cambio/'.$tipo_cambio->id)}}" method="post">
    @method('put')
    @csrf

    <div class="mb-3 row">
        <label for="venta" class="col-sm-1 col-form-label">VENTA:</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="venta" id="venta" value="{{ $tipo_cambio->tc_venta}}" required>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="compra" class="col-sm-1 col-form-label">COMPRA:</label> 
        <div class="col-sm-2">
            <input type="text" class="form-control" name="compra" id="compra" value="{{ $tipo_cambio->tc_compra}}" required>
        </div>
    </div>

    <a href="{{ url('tipo-cambio')}}"  class="btn btn-secondary">Regresar</a>

    <button type="submit" class="btn btn-success"> Guardar</button>
    

</form>
    
@endsection