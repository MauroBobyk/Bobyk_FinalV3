<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
public function register (Request $request){

$user = new User();
$user->name = $request->name;
$user->password = Hash::make($request->password);
$user->save();  
auth::login($user);
return redirect(route('welcome'));
}


public function login(Request $request)
{
    // Comprobamos que el nombre y la contraseña han sido introducidos
    $request->validate([
        'name' => 'required',
        'password' => 'required',
    ]);

    // Almacenamos las credenciales de nombre y contraseña
    $credentials = $request->only('name', 'password');

    // Si el usuario existe lo logamos y lo llevamos a la vista de panel de clientes o pacientes
    if (Auth::attempt($credentials)) {
        return redirect()->intended('PanelUsuario')->withSuccess('Logado Correctamente');

    }
   // Si el usuario no existe devolvemos al usuario al formulario de login
    return redirect("/");
}

public function logout (Request $request){
auth::logout();
$request->session()->invalidate();
$request->session()->regenerateToken();
return redirect(route('welcome'));
    
}

}