@extends('layouts.main')
@section('content')

<script type="text/javascript" src="{{ asset('js/videos.js') }}"></script>

<div class="tarjeta-comoUsar border border-light">

    <h1 class="mb-5">¿Cómo se usa AGENDA.ESCOLAR?</h1>

    <p>¡Hola! Utilizar AGENDA.ESCOLAR es muy sencillo y te voy a enseñar a hacerlo:</p>
    <p>AGENDA.ESCOLAR es la mejor herramienta para organizar tus estudios y tener al día todas tus actividades y tareas de clase, de una forma simple y sencilla.</p>
    <p>Lo primero que debes hacer es registrarte y posteriormente iniciar sesión para entrar en la aplicación. </p>

    <button type="button" onclick="mostrarOcultar('video_1_2'); reiniciarVideo('1'); reiniciarVideo('2');" class="btn btn-dark mb-4"><i class="far fa-play-circle"></i> Ver video</button>

    <div id="video_1_2" class="text-center" hidden>
        <video id="1" src="/images/video/1.mov" width="600px" controls></video>
        <video id="2" src="/images/video/2.mov" width="600px" controls></video>
    </div>

    <p>Una vez dentro, debes añadir tu primera materia de la cual quieres registrar tus tareas. En ella debes indicar el nombre y el curso de dicha materia (por si tienes alguna pendiente de otros años <i class="far fa-smile-wink"></i>).</p>

    <button type="button" onclick="mostrarOcultar('video_3'); reiniciarVideo('3');" class="btn btn-dark mb-4"><i class="far fa-play-circle"></i> Ver video</button>

    <div id="video_3" class="text-center" hidden>
        <video id="3" src="/images/video/3.mov" width="800px" controls></video>
    </div>

    <p>Después, tienes que empezar a añadir tareas que te manden de esa materia, ¡es muy sencillo! </p>
    <p>Simplemente seleccionas a qué materia pertenecen, le pones un nombre, la fecha en la que tiene que estar completada y le das una importancia, ¿sencillo verdad?</p>

    <button type="button" onclick="mostrarOcultar('video_4'); reiniciarVideo('4');" class="btn btn-dark mb-4"><i class="far fa-play-circle"></i> Ver video</button>

    <div id="video_4" class="text-center" hidden>
        <video id="4" src="/images/video/4.mov" width="800px" controls></video>
    </div>

    <p>Una vez que la tengas creada, puedes ver cuánto tiempo te queda y organizarte mejor. Cuando la completes, pulsa el botón y desaparecerá. ¡Trabaja duro para no acumularlas y poder descansar!</p>

    <button type="button" onclick="mostrarOcultar('video_5'); reiniciarVideo('5');" class="btn btn-dark mb-4"><i class="far fa-play-circle"></i> Ver video</button>

    <div id="video_5" class="text-center" hidden>
        <video id="5" src="/images/video/5.mov" width="800px" controls></video>
    </div>

    <p>Si quieres, también puedes modificar las materias que añadiste previamente (por si te equivocas al crearlas) o borrarlas definitivamente. </p>

    <button type="button" onclick="mostrarOcultar('video_6'); reiniciarVideo('6');" class="btn btn-dark mb-4"><i class="far fa-play-circle"></i> Ver video</button>

    <div id="video_6" class="text-center" hidden>
        <video id="6" src="/images/video/6.mov" width="800px" controls></video>
    </div>

    <p>¿Ves lo sencillo que ha sido? Espero que esta aplicación te ayude a organizarte mejor con tus estudios y que saques muy buenas notas. </p>

    <h3>¡Ánimo!</h3>


</div>



@endsection