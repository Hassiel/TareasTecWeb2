<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Proyect;
use Illuminate\Http\Request;

class ProyectController extends Controller
{

    public function index()
    {
        ///Colleción de Tareas
        $proyectos = Proyect::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();

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
            'user_id' => Auth::user()->id,
           'name' => $request->name,
           'description' => $request->description,
           'final_date' => $request->final_date,
            'hex' => $request->hex,
        ]);

        return redirect()->back();
    }

    public function show($id)
    {
        $proyecto = Proyect::find($id);
        return view('show')->with('proyecto', $proyecto);
    }

    public function edit($id)
    {
        $proyecto = Proyect::find($id);
        return view('proyects.edit')->with('proyectos', $proyecto);
    }

    public function update(Request $request, $id)
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

    public function destroy($id)
    {
        $proyecto = Proyect::find($id);

        $proyecto->delete();

        return redirect()->route('proyects.index');
    }
}
