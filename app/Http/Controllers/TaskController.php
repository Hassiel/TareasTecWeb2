<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Proyect;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        //Colleción de Tareas
        $tareas = Task::all();
        $proyectos = Proyect::all();

        return view('index') 
        ->with('tareas', $tareas)
        ->with('proyectos', $proyectos);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        //MODO PRO
        $tarea = Task::create([
           'name' => $request->name,
           'description' => $request->description,
           'due_date' => $request->due_date,
            'area' => $request->area,
            'state' => 'En proceso',
            'note' => $request->note,
            'proyect_id' => $request->proyect_id,
        ]);

        //MODO N00B
        
        //$tarea = new Task;

        //$tarea->name = $request->name;
        //$tarea->description = $request->description;
        //$tarea->due_date = $request->due_date;
        //$tarea->area = $request->area;

        //$tarea->save();
        

        return redirect()->back();
    }

    public function show( $id)
    {
        $tarea = Task::find($id);
        return view('show')->with('tarea', $tarea);
    }

    public function edit( $id)
    {
        $tarea = Task::find($id);
        return view('edit')->with('tarea', $tarea);
    }

    public function update(Request $request, $id)
    {
        //MODO N00B
        /*
        $tarea = Task::find($id);

        $tarea->name = $request->name;
        $tarea->description = $request->description;
        $tarea->due_date = $request->due_date;

        $tarea->save();
        */

        //MODO PRO
        $tarea = Task::find($id);

        $tarea->update([
           'name' => $request->name,
           'description' => $request->description,
           'due_date' => $request->due_date,
            'area' => $request->area,
            'state' => $request->state,
            'note' => $request->note,
            'proyect_id' => $request->proyect_id,
        ]);
        //REGRESO A LA PÁGINA ANTERIOR DEL DETALLE DE TAREA
        //return redirect()->route('tareas.show', $tarea->id);
        if ($request->origen == 'edit') {
            redirect()->route('tareas.show', $tarea->id);
        }else{
           return redirect()->back();
        }
    }

    public function destroy($id)
    { 
        $tarea = Task::find($id);

        $tarea->delete();

        return redirect()->route('tareas.index');
    }
    public function completa($id)
    {
        $tarea = Task::find($id);
        $tarea->state = 'Finalizado';
        $tarea->save();
        return redirect()->back();
    }
}   
