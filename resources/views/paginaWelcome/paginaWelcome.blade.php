<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Inicio - AGENDA.ESCOLAR</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('plantilla_inicio/css/bootstrap.min.css') }}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{ asset('plantilla_inicio/css/mdb.min.css') }}">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="{{ asset('plantilla_inicio/css/stylish-portfolio.css') }}">
</head>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('plantilla_inicio/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="{{ asset('plantilla_inicio/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="{{ asset('plantilla_inicio/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

  <!-- Custom CSS -->
  <link href="{{ asset('plantilla_inicio/css/stylish-portfolio.min.css') }}" rel="stylesheet">

</head>

<body>

  <!-- Start your project here-->


  @yield('content')


  <!-- End your project here-->

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('plantilla_inicio/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('plantilla_inicio/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('plantilla_inicio/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('plantilla_inicio/js/stylish-portfolio.min.js') }}"></script>

</body>

</html>