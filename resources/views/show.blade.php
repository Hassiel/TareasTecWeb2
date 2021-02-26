@extends('layouts.master')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12 position-relative">
                    <div class="block py-5 px-5">
                        <h1>Show</h1>
                        <a class="link-dark" href="{{ route('tareas.index') }}">RETURN</a>
                        <hr>
                        <h4>{{ $tarea->name }}</h4>
                        <p>{{ $tarea->description }}</p>
                        <p>Fecha de entrega: {{ $tarea->due_date }}</p>
                        <p>Materia: {{ $tarea->area }}</p>
                        <p>Estado de tarea:
                                @if ($tarea->state == 'En proceso')
                                   <span class="badge bg-warning text-dark">{{ $tarea->state }}</span>
                                @endif
                                @if ($tarea->state == 'Finalizado')
                                   <span class="badge bg-success">{{ $tarea->state }}</span> 
                                @endif  </p>
                        <p>Notas:  {{ $tarea->note }}</p>
                        <a class="link-light" href="{{ route('tareas.edit', $tarea->id) }}">Editar tarea</a>
                        <form action="{{ route('tareas.destroy',$tarea->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-outline-warning mt-4" type="submit">Borrar registro</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        
@endsection