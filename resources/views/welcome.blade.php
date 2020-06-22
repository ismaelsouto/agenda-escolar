@extends('paginaWelcome.paginaWelcome')
@section('content')
@if (session('successMsg'))

<div class="alert alert-success" role="alert">
  {{session('successMsg')}}
</div>

@endif

<body id="page-top">
  <header class="masthead d-flex">

     

    <div class="container text-center my-auto">
      <img src="/images/logo_negro.png">
      <h3 class="mb-5">
        <em class="cursiva">La mejor forma de organizar tus estudios</em>
      </h3>
      @if(Auth::check())
      <a class="btn btn-dark btn-xl js-scroll-trigger" href="{{url('/materias')}}">Entrar en la aplicación</a>
      @else
      <a class="btn btn-dark btn-xl js-scroll-trigger" href="{{url('/login')}}">Iniciar sesion</a>
      <a class="btn btn-dark btn-xl js-scroll-trigger" href="{{url('/register')}}">Registrarse</a>
      @endif
    </div>
    <div class="overlay"></div>
  </header>
</body>
@endsection