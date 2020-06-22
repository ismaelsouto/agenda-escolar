@extends('layouts.main')
@section('content')


@if(count($materias)>0)


<form class="text-center border border-light p-5 cajon-crear-editar" action="{{route('storeTarea')}}" method="POST">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{$error}}
    </div>
    @endforeach
    @endif

    {{ csrf_field() }}
    <p class="h2 mb-4 text-dark">Nueva tarea</p>

    <div class="form-row mb-4">
        <div class="col">
            <select class="form-control" name="nombre_materia">
                <option disabled selected>Nombre de la materia</option>
                @foreach ($materias as $materia)
                <option>{{$materia->nombre}}</option>
                @endforeach
            </select>
            <!--<input type="text" id="defaultRegisterFormFirstName" class="form-control" name="nombre_tarea" placeholder="Nombre de la materia">-->
        </div>
        <div class="col">
            <input type="text" id="defaultRegisterFormLastName" class="form-control" name="nombre" placeholder="Nombre de la tarea">
        </div>
        <div class="col">
            <input type="date" id="defaultRegisterFormLastName" class="form-control" name="fecha" placeholder="Fecha de la tarea">
        </div>
        <div class="col">
            <select class="form-control" name="importancia">
                <option disabled selected>Importancia</option>
                <option>Poca importancia</option>
                <option>Importancia media</option>
                <option>¡Muy importante!</option>
            </select>
            <!--<input type="text" id="defaultRegisterFormFirstName" class="form-control" name="nombre_tarea" placeholder="Nombre de la materia">-->
        </div>
    </div>

    <button class="btn btn-info my-4 btn-block btn-light" type="submit">Añadir</button>


</form>

@else

<div class="alert alert-dark" style="width: 50%; padding: 2%; text-align: center; margin: 0 auto;">
    <h4>¡Espera!</h4>
    <p>Todavía no has añadido ninguna materia, ¿a qué esperas?</p>
    <a href="{{url('/createMateria')}}"><button type="button" class="btn btn-light">Añadir mi primera materia</button></a>
</div>

@endif

@endsection