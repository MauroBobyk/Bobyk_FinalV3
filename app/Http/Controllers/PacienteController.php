<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
class PacienteController extends Controller
{
    public function index (){
        $paciente = Paciente::latest()->paginate(5);
        return view('Pacientes.index',compact('paciente'))->with('i', (request()->input('page', 1) - 1) * 5);
}}