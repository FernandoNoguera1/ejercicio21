<?php

namespace App\Http\Controllers;

use App\Models\Viajero;
use App\Models\Viaje;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
      // Listar todos los registros
      public function index(){
        $viajes = Viaje::orderby('id', 'asc')->get();
        return view('viaje.index', compact('viajes'));
    }

    // Formulario create
    public function create(){
        $viajeros=viajero::orderBy('id', 'asc')->get(); 
        return view('viaje.create', compact('viajeros'));
    }

    // Registrar en base de datos un viajero
    public function store(Request $request){
        $viaje = new Viaje();
        $viaje->num_plazas = $request->num_plazas;
        $viaje->fecha = $request->fecha;
        $viaje->otros_datos = $request->otros_datos;
        $viaje->viajero_id = $request->viajero_id;
        $viaje->save();
        // $viaje->viajeros()->attach($request->viajero_id);
        return redirect()->route('viaje.index');
    }

    // Ver un registro
    public function show(Viaje $viaje){
        $viajeros = Viajero::orderBy('id', 'asc')->get();
        return view('viaje.show',compact('viaje','viajeros'));
    }

    // Formulario editar un registro
    public function edit(Viaje $viaje){
        $viajeros = Viajero::orderBy('id', 'asc')->get();
        return view('viaje.edit', compact('viaje','viajeros'));
    }

    // Actualizar un registro
    public function update(Request $request, Viaje $viaje){
     
        $viaje->num_plazas = $request->num_plazas;
        $viaje->fecha = $request->fecha;
        $viaje->otros_datos = $request->otros_datos;
        $viaje->save();
        return redirect()->route('viaje.index');
    }

    // Eliminar un registro
    public function destroy (Viaje $viaje){
         $viaje->delete();
        return redirect()->route('viaje.index');
    }
}
