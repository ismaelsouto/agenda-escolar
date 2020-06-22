@extends('layouts.main')
@section('content')

@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{$error}}
</div>
@endforeach
@endif

@if(count($materias)>0)
{{ csrf_field() }}

<div class="tabla-resultados">
    <h1 class="text-left">Ver tareas de...</h1>
    <table class="table table-hover">
        <thead class="black white-text">

            <tr>
                <th scope="col">Elige el nombre de la materia</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($materias as $materia)
            <tr>
                <td class="align-middle h5 font-weight-light"><a href="{{route('tareas',$materia->id)}}">{{$materia->nombre}}</td></a>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@else

<div class="alert alert-dark" style="width: 50%; padding: 2%; text-align: center; margin: 0 auto;">
    <h3>¡Espera!</h3>
    <p class="text-dark">Todavía no has añadido ninguna materia, ¿a qué esperas?</p>
    <a href="{{url('/createMateria')}}"><button type="button" class="btn btn-light">Añadir mi primera materia</button></a>
</div>

@endif

@endsection