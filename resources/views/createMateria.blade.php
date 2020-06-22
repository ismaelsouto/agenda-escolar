@extends('layouts.main')
@section('content')



<!-- Default form register -->
<form class="text-center border border-light p-5 cajon-crear-editar" action="{{route('storeMateria')}}" method="POST">
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
        {{$error}}
        </div>
    @endforeach
@endif
{{ csrf_field() }}
    <p class="h2 mb-4 text-dark">Nueva materia</p>

    <div class="form-row mb-4">
        <div class="col">
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" name= "nombre" placeholder="Nombre de la materia">
        </div>
        <div class="col">
            <input type="text" id="defaultRegisterFormLastName" class="form-control" name= "curso" placeholder="Curso de la materia">
        </div>
    </div>
    
    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block btn-light" type="submit">Añadir</button>

    

</form>
<!-- Default form register -->



@endsection