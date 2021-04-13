@extends('layouts.master2')

@section('content')
    <h1>{{ $tarea->name }}</h1>  
    
    <div class="container">
    <div class="row">
        <div class="col-md-12 pt-3">
            <div class="card text-white bg-dark">
                    <div class="card-body">
                        <form action="{{route('tareas.update', $tarea->id)}}" method="POST">
        <!--campo de protección de formulario-->
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <!--Campos de formulario-->   
        <label for="">Nombre de tarea</label>
        <input class="form-control" type="text" placeholder="Nombre de tarea" name="name" value="{{ $tarea->name }}">
        <label for="">Descripción</label>
        <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $tarea->description }}</textarea>
        <br>
        <label for="">Fecha de Tarea</label>
        <input class="form-control" type="date" name="due_date" value="{{ $tarea->due_date }}">
        <label for="">Materia</label>
                <select class="form-control mb-3" name="area" id="">
                    <option value="Tecnologia web">Tecnología Web</option>
                    <option value="Ase">ASE 3</option>
                    <option value="Practicas profesionales">Prácticas profesionales</option>
                    <option value="Branding">Branding</option>
                </select>
        <br>
        <label for="">Notas:</label>
        <textarea class="form-control" name="note" id="" cols="30" rows="10">{{ $tarea->note }}</textarea>
        <br>
        <!--Guardar formulario-->
        <button class="btn btn-outline-light" type="submit">Guardar tarea</button>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection