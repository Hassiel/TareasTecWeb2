<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Auth;
use App\Models\Proyect;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        //Colleción de Tareas
        $tareas = Task::where('user_id', Auth::user()->id)->get();;
        $proyectos = Proyect::where('user_id', Auth::user()->id)->get();;

        return view('task.index') 
        ->with('tareas', $tareas)
        ->with('proyectos', $proyectos);
    }

    public function create()
    {
        return view('task.create');
    }

    public function store(Request $request)
    {
        //MODO PRO
        $tarea = Task::create([
            'user_id' => Auth::user()->id,
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
        $tarea = Task::where('id', $id)->where('user_id', Auth::user()->id)->first();

        if (empty($tarea)) {
            return redirect()->back();
        }else{
            return view('task.show')->with('tarea', $tarea);
        }
    }

    public function edit( $id)
    {
        $tarea = Task::find($id);
        return view('task.edit')->with('tarea', $tarea);
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
        if ($request->origen == 'task.edit') {
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
