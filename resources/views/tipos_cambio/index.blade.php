@extends('layouts.app')

@section('title', 'TIPOS DE CAMBIO')

@section('content')

<h2>Listado de Tipos de Cambio</h2>

<a href="{{ url('tipo-cambio/create')}}" class="btn btn-primary btn-sm">Nuevo Registro</a>
<div style='width: 650px;'>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>VENTA</th>
                <th>COMPRA</th>
                <th>FECHA REGISTRO</th>
                <th colspan="2">ACCIONES</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($tipos_cambio as $tipo_cambio)
            <tr>
                <td>{{ $tipo_cambio->id }}</td>
                <td>{{ $tipo_cambio->tc_venta}}</td>
                <td>{{ $tipo_cambio->tc_compra}}</td>
                <td>{{ $tipo_cambio->created_at}}</td>
                <td><a href="{{ url('tipo-cambio/'.$tipo_cambio->id.'/edit')}}" class="btn btn-warning btn-sm">Editar</a></td>
                
                <td>
                    <form action="{{ url('tipo-cambio/'.$tipo_cambio->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-sm" onclick="return confirm('{{ __('¿Estás seguro que quieres eliminar este registro??') }}')">
                            {{ 'Eliminar'}}
                        </button>
                    </form>

                    
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
@endsection