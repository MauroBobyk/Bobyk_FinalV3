<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!DOCTYPE HTML>
    <html lang="es">
        <head>
            <title> Login </title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
            crossorigin="anonymous"/>
        </head>
  
        <body class="bg-info d-flex justify-content-center align-items-center vh-100">
            <div class="rounded-3 bg-white p-5">{{-- aca es la caja princpial --}}
           <div >
            <img
            
            src="images/Logo_Dental.svg"
            alt="Clinica-icono"
             style="height: 20rem"
             >
           </div>
           
           <div class="d-grid gap-2">
            <a href="{{route('OpcionPacientes')}}" class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">Administrar pacientes</a>
            <a href="{{route('OpcionMedico')}}" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true">Administrar medicos</a>
            <a href="{{route('turnos')}}" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Turnos</a>
           
          </div>
        
            
    <div>  <a href="{{route('logout')}}"> <button type="button" class="btn btn-primary" style="margin-top: 1rem" >Salir</button></a></div>
</div>
</body>
</html>