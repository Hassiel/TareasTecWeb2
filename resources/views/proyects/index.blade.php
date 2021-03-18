@extends('layouts.master')

@section('content')
<div class="container-fluid mb-4" >
    <div class="row align-items-center">
        <div class="col-md-8">
            <div class="title-page px-4 py-5">
                <h3 class="display-1">Noé Hassiel</h3>
                <p class="lead">Notion 2.0 N00B</p>
            </div>
        </div>
        <div class="col-md-4">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Crear nuevo proyecto
            </button>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTarea">Crear nuevo proyecto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
       <form action="{{route('proyectos.store')}}" method="POST">
            <div class="modal-body">
                <!--campo de protección de formulario-->
            {{ csrf_field() }}
            <!--Campos de formulario-->
            <div class="form-group mb-3">
                <label for="">Nombre de tarea</label>
                <input class="form-control"type="text" placeholder="Nombre de tarea" name="name">
            </div>
            <div class="form-group mb-3">
                <label for="">Descripción</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
            </div>   
            <div class="form-group mb-3">
                <label for="">Fecha de Tarea</label>
                <input class="form-control" type="date" name="due_date">
            </div>
                <br>
            <div class="form-group mb-3">
                <label for="">Color de proyecto</label>
                <input class="form-control" type="color" name="hex">
                </select>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-outline-success">Guardar proyecto</button>
            </div>
        </form>
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card text-white bg-dark">
                <h5 class="card-header">Listado de proyectos</h5>
                    <div class="card-body">
                        <h5 class="card-title">Proyectos en curso</h5>
                        <p class="card-text">Este es tu listado de proyectos</p>
                    </div>
            </div>
        </div>
    </div>
                        <div class="row">
                        @foreach ($proyectos as $proyecto)
                        <div class="col-md-4 mt-4">
                            <div class="card text-white bg-dark">
                                <div class="line-color" style="height: 5px; width: 100%;
                                background-color:{{ $proyecto->hex }}">
                                    <div class="card-body">
                                        <h4>{{ $proyecto->name }}</h4>
                                        <p>{{ $proyecto->description }}</p>
                                    </div>

                                    <div class="tareas">
                                        <ul>
                                            @foreach ($proyecto->tasks as $tarea)
                                                <li><a class="text-white" href="{{ route('tareas.show', $tarea->id) }}">{{ $tarea->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <a type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#agregarTarea_{{ $proyecto->id }}">
                                        AGREGAR TAREA</a>
                                </div>
                                <!-- Modal -->
<div class="modal fade" id="agregarTarea_{{ $proyecto->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTarea">Crear nueva tarea</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
       <form action="{{route('tareas.store')}}" method="POST">
            <div class="modal-body">
                <!--campo de protección de formulario-->
            {{ csrf_field() }}
            <!--Campos de formulario-->
            <div class="form-group mb-3">
                <label for="">Nombre de tarea</label>
                <input class="form-control"type="text" placeholder="Nombre de tarea" name="name">
            </div>
            <div class="form-group mb-3">
                <label for="">Descripción</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
            </div>   
            <div class="form-group mb-3">
                <label for="">Fecha de Tarea</label>
                <input class="form-control" type="date" name="due_date">
            </div>
                <br>
            <div class="form-group mb-3">
                <label for="">Materia</label>
                <select class="form-control mb-3" name="area" id="">
                    <option value="Tecnologia Web">Tecnología Web</option>
                    <option value="ASE 3">ASE 3</option>
                    <option value="Prácticas Profesionales">Prácticas Profesionales</option>
                    <option value="Branding">Branding</option>
                </select>
            </div>
            <div class="form-group mb-3">
                    @foreach ($proyectos as $proyecto)
                        <input type="hidden" value="{{ $proyecto->id }}" class="form-control" name="proyect_id">
                    @endforeach
                </select>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-outline-success">Guardar tarea</button>
            </div>
        </form>
    </div>
  </div>
</div>
                            </div>
                        </div>
                        @endforeach
                        </div>
</div>                        
                
@endsection
