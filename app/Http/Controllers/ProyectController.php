<?php

namespace App\Http\Controllers;

use App\Models\Proyect;
use Illuminate\Http\Request;

class ProyectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ///Colleción de Tareas
        $proyectos = Proyect::all();

        return view('proyects.index') ->with('proyectos', $proyectos);
    }

    public function create()
    {
        return view('proyects.create');
    }

    public function store(Request $request)
    {
        //MODO PRO
        $proyecto = Proyect::create([
           'name' => $request->name,
           'description' => $request->description,
           'final_date' => $request->final_date,
            'hex' => $request->hex,
        ]);

        return redirect()->back();
    }

    public function show(Proyect $proyect)
    {
        //
    }

    public function edit(Proyect $proyect)
    {
        //
    }

    public function update(Request $request, Proyect $proyect)
    {
        //
    }

    public function destroy(Proyect $proyect)
    {
        //
    }
}
