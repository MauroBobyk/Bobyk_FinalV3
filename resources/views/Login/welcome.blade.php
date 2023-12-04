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
           <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="text-center">
            <input placeholder="Usuario" type="name" class="form-label" id="nombreInnput" name="name" required autocomplete="disabled">
            </div>
                       <div class="text-center">
            <input placeholder="Contraseña" style="margin-top: 1rem" type="password" class="form-label" id="passwordInput" name="password" required autocomplete="disabled">
            </div>

            <button type="submit" class="btn btn-info text-white w-100 mt-3" style="margin-top: 1rem" >Ingresar</button>

<div>
         <a href="{{route('registro')}}"> <button type="button" class="btn btn-secondary text-white w-100 mt-3" style="margin-top: 1rem" >Registrar</button></a> 
</div>
           </form>   
        </div>
            
      </body>
    </html>