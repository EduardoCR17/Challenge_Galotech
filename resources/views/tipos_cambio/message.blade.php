@extends('layouts.app')

@section('title', 'TIPOS DE CAMBIO')

@section('content') 

<h2>{{ $msg }}</h2>
<a href="{{ url('tipo-cambio')}}" class="btn btn-secondary">Regresar</a>
@endsection

