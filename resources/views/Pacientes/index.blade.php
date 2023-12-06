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
                <th>Documento</th>
                <th>Nombre y apellido</th> 
                <th>Edad</th>
                <th>telefono</th>
                <th>Fecha de Nacimiento</th>
                <th width="280px">Acciones</th>
            </tr>
            @foreach ($pacientes as $paciente)
                <tr>
                    <td>{{ $paciente->dni }}</td>
                    <td>{{ $paciente->nombre }}</td>
                    <td>{{ $paciente->edad }}</td>
                    <td>{{ $paciente->telefono }}</td>
                    <td>{{ $paciente->fecha}}</td>
                    <td>
               <form action="{{ route('Pacientes.destroy',$paciente->dni) }}" method="POST"> 

                       <a class="btn btn-info" href="{{ route('Pacientes.show',$paciente->dni) }}">Ver</a>
                          <a class="btn btn-primary" href="{{ route('Pacientes.edit',$paciente->dni) }}">Modificar</a> 

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>  
                </tr>
            @endforeach
        </table>
    @else
        <div class="alert alert-alert">Comenzar agregando a la Base de Datos.</div>
    @endif
    {!! $pacientes->links() !!}

@endsection