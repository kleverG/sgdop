<?php

namespace App\Http\Controllers;

use App\Models\Coordinador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoordinadorController extends Controller
{
    public function index()
    {
        $coordinadores = Coordinador::get();
        return view ('coordinadores.index', ['coordinadores' => $coordinadores ]);
    }

    public function show(Coordinador $coordinador)
    {
        return view ('coordinadores.show', ['coordinador' => $coordinador ]);
    }

    public function create()
    {
        return view ('coordinadores.create');
    }

    public function store( Request $request)
    {
        $request->validate([
            'nombre' => ['required','min:4'],
            'cedula' => ['required','min:7'],
        ]);


        $coordinador         = new Coordinador;
        $coordinador->name   = $request->input('nombre');
        $coordinador->cedula = $request->input('cedula');
        
        $coordinador->save();

        session()->flash('status','coordinador creado satisfactoriamente');

        return to_route('coordinadores.index');
    }

    public function edit(Coordinador $coordinador)
    {
        return view ('coordinadores.edit', ['coordinador' => $coordinador ]);
    }
    
    public function update(Request $request, Coordinador $coordinador)
    {
        $request->validate([
            'nombre' => ['required','min:4'],
            'cedula' => ['required','min:7'],
        ]);

        $coordinador->name   = $request->input('nombre');
        $coordinador->cedula = $request->input('cedula');
        
        $coordinador->save();

        session()->flash('status','coordinador actualizado satisfactoriamente');

        return to_route('coordinadores.show',$coordinador);
    }

    
}
