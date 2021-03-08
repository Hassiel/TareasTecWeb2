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
        $proyecto = Proyect::find($id);
        return view('show')->with('proyecto', $proyecto);
    }

    public function edit(Proyect $proyect)
    {
        $proyecto = Proyect::find($id);
        return view('proyects.edit')->with('proyectos', $proyecto);
    }

    public function update(Request $request, Proyect $proyect)
    {
        //MODO PRO
        $proyecto = Proyect::find($id);

        $proyecto->update([
           'name' => $request->name,
           'description' => $request->description,
           'final_date' => $request->final_date,
            'hex' => $request->hex,
        ]);
        //REGRESO A LA PÁGINA ANTERIOR DEL DETALLE DE TAREA
        //return redirect()->route('tareas.show', $tarea->id);
            if ($request->origen == 'edit'){
                redirect()->route('proyects.show', $proyecto->id);
            }else{
                return redirect()->back();
            }
    }

    public function destroy(Proyect $proyect)
    {
        $proyecto = Proyect::find($id);

        $proyecto->delete();

        return redirect()->route('proyects.index');
    }
}
