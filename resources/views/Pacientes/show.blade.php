@extends('Pacientes.inicio')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Ver Producto</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('Pacientes.index') }}"> Volver</a>
        </div>
    </div>

    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre y apellido:</strong>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre del Paciente">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DNI:</strong>
                <input type="text" name="dni" class="form-control" placeholder="DNI del Paciente">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Edad:</strong>
                <input type="text"  name="edad" class="form-control" placeholder="Edad">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefono:</strong>
                <input type="text"  name="telefono" class="form-control" placeholder="Telefono">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha de nacimiento:</strong>
                <input type="date" name="fecha" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
@endsection