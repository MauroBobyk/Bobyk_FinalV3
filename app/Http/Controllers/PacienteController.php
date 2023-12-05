<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
class PacienteController extends Controller
{
    public function index (){
        $pacientes = Paciente::latest()->paginate(10);
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
        return redirect()->route('Paciente.index')->with('success','Paciente cargado exitosamente.');
    }

    public function edit(Paciente $pacientes)
    {
        return view('Pacientes.edit',compact('paciente'));
    }

    public function update(Request $request, Paciente $pacientes)
    {
        $request->validate([
            'nombre' => 'required',
            'dni' => 'required',
            'edad' => 'required',
            'telefono' => 'required',
            'fecha' => 'required',
        ]);

        $pacientes->update($request->all());
        return redirect()->route('Paciente.index')->with('success','Producto modificado exitosamente.');
    }

    public function destroy(Paciente $pacientes)
    {
        $pacientes->delete();
        return redirect()->route('Paciente.index')->with('success','Paciente eliminado exitosamente.');
    }

}