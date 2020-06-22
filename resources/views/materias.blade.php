@extends('layouts.main')
@section('content')
@if (session('successMsg'))

@endif

@if(count($materias)>0)
{{ csrf_field() }}

<div class="tabla-materias">
  <h1 class="text-left">Materias</h1>
  <table class="table table-hover">
    <thead class="black white-text">

      <tr>
        <th scope="col">Nombre de la asignatura</th>
        <th scope="col">Curso</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>

      @if (session('alert'))
      <div class="alert alert-success">
        {{ session('alert') }}
      </div>
      @endif

      @foreach ($materias as $materia)
      <tr>
        <td class="align-middle h5 font-weight-light">{{$materia->nombre}}</td>
        <td class="align-middle h5 font-weight-light">{{$materia->curso}}</td>
        <td>
          <a class="" href="{{route('tareas',$materia->id)}}"><button type="button" class="btn btn-light">Ver tareas</button></a>
          <a class="" href="{{route('edit',$materia->id)}}"><button type="button" class="btn btn-light">Editar materia</button></a>
          <a  onclick="return confirm('¿Estás seguro de elimiar esta materia?')" class="" href="{{route('deleteMateria',$materia->id)}}"><button type="button" class="btn btn-danger btn-circle btn-md"><i class="fas fa-trash-alt"></i></button></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{url('/createMateria')}}"><button type="button" class="btn btn-light">Añadir otra materia</button></a>
</div>
@else

<div class="alert alert-dark" style="width: 50%; padding: 2%; text-align: center; margin: 0 auto;">
  <h3>Bienvenido/a a AGENDA.ESCOLAR</h3>
  <p class="text-dark">Todavía no has añadido ninguna materia, ¿a qué esperas?</p>
  <a href="{{url('/createMateria')}}"><button type="button" class="btn btn-light mt-4">Añadir mi primera materia</button></a>
  <p class="text-dark mt-5">Si es tu primera vez, haz click <a class="text-dark btn-link" href="{{url('/comoUsar')}}">aquí</a> para aprender a usarme.</p>  
</div>

@endif

@endsection