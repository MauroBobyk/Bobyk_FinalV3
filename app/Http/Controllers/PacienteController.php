<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
class PacienteController extends Controller
{
    public function index (){
        $pacientes = Paciente::latest()->paginate(5);
        return view('Pacientes.index',compact('pacientes'))->with('i', (request()->input('page', 1) - 1) * 5);
}
public function carga(){
    return view('Pacientes.carga');
}

 public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'dni' => 'required',
            'edad' => 'required',
            'telefono' => 'required',
            'fecha' => 'required',
        ]);

        Paciente::create($request->all());
        return redirect()->route('Pacientes.carga')->with('success','Paciente cargado exitosamente.');
    }


}