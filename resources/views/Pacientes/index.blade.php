@extends('Pacientes.inicio')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h2 class="text-center">Listado de pacientes</h2>
    </div>
    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
<a class="btn btn-success " href="{{ route('Pacientes.carga') }}"> Agregar Pacientes</a>
    </div>
</div>
@if(sizeof($pacientes) > 0)
        <table class="table table-bordered">
            <tr>
                <th>Nombre y apellido</th>
                <th>Documento</th>
                <th>Edad</th>
                <th>telefono</th>
                <th>Fecha de Nacimiento</th>
                <th width="280px">Acciones</th>
            </tr>
            @foreach ($pacientes as $paciente)
                <tr>
                    <td>{{ $paciente->nombre }}</td>
                    <td>{{ $paciente->dni }}</td>
                    <td>{{ $paciente->edad }}</td>
                    <td>{{ $paciente->telefono }}</td>
                    <td>{{ $paciente->fecha}}</td>
                    </td>  
                </tr>
            @endforeach
        </table>
    @else
        <div class="alert alert-alert">Comenzar agregando a la Base de Datos.</div>
    @endif


@endsection