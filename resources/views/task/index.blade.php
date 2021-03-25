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
            Crear nueva tarea
            </button>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <label for="">Proyectos</label>
                <select class="form-control mb-3" name="proyect_id">
                    @foreach ($proyectos as $proyecto)
                        <option value="{{ $proyecto->id }}">{{ $proyecto->name }}</option>
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
<div class="container">
    <div class="row">
        <div class="col-md-12 pt-3">
            <div class="card text-white bg-dark">
                <h5 class="card-header">Listado de tareas</h5>
                    <div class="card-body">
                        <table class="table table-dark table-hover table-borderless">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Fecha de entrega</th>
                        <th scope="col">Materia</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tareas as $tarea)
                        <tr>
                            <th scope="row">{{ $tarea->id }}</th>
                            <td>{{ $tarea->name }}</td>
                            <td>{{ $tarea->description }}</td>
                            <td>{{ $tarea->due_date }}</td>
                            <td>{{ $tarea->area }}</td>
                            <td>
                                @if ($tarea->state == 'En proceso')
                                   <span class="badge bg-warning text-dark">{{ $tarea->state }}</span>
                                @endif
                                @if ($tarea->state == 'Finalizado')
                                   <span class="badge bg-success">{{ $tarea->state }}</span> 
                                @endif  
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#editarTarea_{{ $tarea->id }}">
  Editar Tarea
</button>                       <form action="{{ route('completar.tarea', $tarea->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    <button class="btn btn-outline-success mt-4" type="submit">Finalizada</button>
                                </form>
                            </td>
                        </tr>
                        <!-- Modal -->
<div class="modal fade" id="editarTarea_{{ $tarea->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edición de tarea</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('tareas.update', $tarea->id)}}" method="POST">
      <div class="modal-body">
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
        <button class="btn btn-outline-success" name="state" value="Finalizado">Finalizado</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-outline-success">Guardar cambios</button>
        <a href="{{ route('tareas.show', $tarea->id) }}" type="button" class="btn btn-outline-info">Ver tarea</a>
      </div>
        </form>
    </div>
  </div>
</div>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
