<?php

namespace App\Http\Controllers;

use App\Materias;
use App\Tareas;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{

    public function welcome()
    {
        $users = DB::select('SELECT * FROM users');
        return view('welcome');
    }

    public function index()
    {
        //$materias = Materias::all();
        $materias = DB::table('materias')->where('usuario_id', auth()->id())->get();
        return view('materias', compact('materias'));
    }

    public function login()
    {
        return view('login');
    }

    public function materias()
    {
        $materias = DB::table('materias')->where('usuario_id', auth()->id())->get();
        return view('materias', compact('materias'));
    }

    public function tareas($id)
    {
        $tareas = DB::select('SELECT * FROM tareas WHERE id_materia = ?', [$id]);
        return view('tareas', compact('tareas'));
    }

    public function createMateria()
    {
        return view('createMateria');
    }

    public function storeMateria(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'curso' => 'required'
        ]);

        $materia = new Materias;
        $materia->usuario_id = auth()->id();
        $materia->nombre = $request->nombre;
        $materia->curso = $request->curso;
        $materia->save();
        return redirect(route('materias'))->with('alert', 'Materia añadida correctamente.');
    }

    public function selectTareas()
    {
        $materias = DB::table('materias')->where('usuario_id', auth()->id())->get();
        return view('selectTareas', compact('materias'));
    }

    public function createTarea()
    {
        $materias = DB::table('materias')->where('usuario_id', auth()->id())->get();
        return view('createTarea', compact('materias'));
    }

    public function storeTarea(Request $request)
    {
        $this->validate($request, [
            'nombre_materia' => 'required',
            'nombre' => 'required',
            'fecha' => 'required',
            'importancia' => 'required',
        ]);

        //$id= DB::select('SELECT id FROM materias WHERE nombre_materia = ?', $request->nombre_materia);
        $id = DB::table('materias')->where('nombre',  $request->nombre_materia)->where ('usuario_id', auth()->id())->pluck('id');

        $tarea = new Tareas;
        $tarea->id_materia = $id[0];
        $tarea->nombre_materia = $request->nombre_materia;
        $tarea->nombre = $request->nombre;
        $tarea->fecha = $request->fecha;
        $tarea->importancia = $request->importancia;
        $tarea->save();

        return redirect(route('tareas', $tarea->id_materia))->with('alert', 'Tarea añadida correctamente.');
      
    }

    public function edit($id)
    {
        $materia = Materias::where('id', $id)->first();
        return view('edit', compact('materia'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'curso' => 'required'
        ]);

        $materia = Materias::where('id', $id)->first();
        $materia->nombre = $request->nombre;
        $materia->curso = $request->curso;
        $materia->save();
        return redirect(route('materias'))->with('alert', 'Materia modificado');
    }

    public function deleteMateria($id)
    {
        $materia = Materias::where('id', $id)->first();
        $materia->delete();
        return redirect(route('materias'))->with('alert', 'La materia ha sido borrada');
    }

    public function deleteTarea($id)
    {
        $tarea = Tareas::where('id', $id)->first();
        $tarea->delete();
        return redirect()->back()->with('alert', '¡La tarea "' . $tarea->nombre . '" ha sido completada!');
        //return redirect(route('materias'))->with('successMsg', '¡Tarea completada!');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function comoUsar()
    {
        return view('comoUsar');
    }
}
