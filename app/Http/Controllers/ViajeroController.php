<?php

namespace App\Http\Controllers;

use App\Models\Viajero;
use Illuminate\Http\Request;

class ViajeroController extends Controller
{
    // Listar todos los registros
    public function index(){
        $viajeros = Viajero::orderby('id', 'asc')->get();
        return view('viajero.index', compact('viajeros'));
    }

    // Formulario create
    public function create(){
        return view('viajero.create');
    }

    // Registrar en base de datos un viajero
    public function store(Request $request){
        $viajero = new Viajero();
        $viajero->nombre = $request->nombre;
        $viajero->direccion = $request->direccion;
        $viajero->telefono = $request->telefono;
        $viajero->save();
        return redirect()->route('viajero.index');
    }

    // Ver un registro
    public function show(Viajero $viajero){
        return view('viajero.show',compact('viajero'));
    }

    // Formulario editar un registro
    public function edit(Viajero $viajero){
        return view('viajero.edit', compact('viajero'));
    }

    // Actualizar un registro
    public function update(Request $request, Viajero $viajero){
     
        $viajero->nombre = $request->nombre;
        $viajero->direccion = $request->direccion;
        $viajero->telefono = $request->telefono;
        $viajero->save();
        return redirect()->route('viajero.index');
    }

    // Eliminar un registro
    public function destroy (Viajero $viajero){
         $viajero->delete();
        return redirect()->route('viajero.index');
    }
}