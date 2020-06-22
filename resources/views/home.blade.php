@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">¡Felicidades!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Te has logueado correctamente.

                    <a class="btn btn-dark btn-xl js-scroll-trigger float-right" href="{{url('/materias')}}">Entrar en la aplicación</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
