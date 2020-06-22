@extends('layouts.main')
@section('content')

@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{$error}}
</div>
@endforeach
@endif


@if(count($tareas)>0)
{{ csrf_field() }}

<div class="cajon-tareas">
    <div class="text-left">
        <h1><?php
            $id = substr($_SERVER['REQUEST_URI'], 8);
            $nombre = DB::table('tareas')->select('nombre_materia')->where('id_materia', $id)->take(1)->get();
            echo substr($nombre, 20, -3); ?></h1>
    </div>
    <table class="table align-middle">
        <thead class="black white-text">
            <tr>
                <th scope="col">Nombre de la tarea</th>
                <th scope="col">Fecha de la tarea</th>
                <th scope="col">Quedan</th>
                <th>Importancia</th>
                <th scope="col">¿Completada?</th>
            </tr>
        </thead>
        <tbody>
            @if (session('alert'))
            <div class="alert alert-success">
                {{ session('alert') }}
            </div>
            @endif

            @foreach ($tareas as $tarea)

            <tr>
                <th class="h4 align-middle font-weight-light">{{$tarea->nombre}}</th>
                <td class="align-middle h6 font-weight-light">
                    <?php
                    $fecha = $tarea->fecha;
                    $fechaFormateada = date("d/m/Y", strtotime($fecha));
                    echo $fechaFormateada;
                    ?></td>
                <td class="align-middle h6 font-weight-light">
                    <?php
                    $datetime1 = new DateTime();
                    $datetime2 = new DateTime($tarea->fecha);
                    $interval = $datetime1->diff($datetime2);
                    echo $interval->format('%a días') ?></td>
                <td class="align-middle">
                    @switch($tarea->importancia)
                    @case('Poca importancia')
                    <span class="h5 text-success">{{$tarea->importancia}}</span>
                    @break
                    @case('Importancia media')
                    <span class="h4 text-warning">{{$tarea->importancia}}</span>
                    @break
                    @case('¡Muy importante!')
                    <span class="h3 text-danger">{{$tarea->importancia}}</span>
                    @break
                    @endswitch
                </td>
                <td><a href="{{route('deleteTarea',$tarea->id)}}"><button type="button" class="btn btn-success">¡Completada!</button></a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <a href="{{url('/createTarea')}}"><button type="button" class="btn btn-light">Añadir otra tarea</button></a>
</div>
@else

<div class="alert alert-dark cajon-tareas">
    <a href="{{ URL::previous() }}"><button class="close float-left" type="button"><i class="fas fa-arrow-left"></i></button></a>
    <h4>¡Enhorabuena!</h4>
    <p>No existen tareas para esta materia, ¡descansa!</p>
    <a href="{{url('/createTarea')}}"><button type="button" class="btn btn-light">Añadir una tarea</button></a>
</div>

@endif

@endsection