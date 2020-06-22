<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'AgendaController@welcome')->name('welcome');

Auth::routes();

Route::get('/materias', 'AgendaController@index')->name('materias');
Route::get('/tareas/{id}', 'AgendaController@tareas')->name('tareas');

Route::get('/selectTareas', 'AgendaController@selectTareas')->name('selectTareas');

Route::get('/comoUsar', 'AgendaController@comoUsar')->name('comoUsar');

Route::get('/createMateria','AgendaController@createMateria' )->name('createMateria');
Route::post('/createMateria','AgendaController@storeMateria' )->name('storeMateria');

Route::get('/createTarea','AgendaController@createTarea' )->name('createTarea');
Route::post('/createTarea','AgendaController@storeTarea' )->name('storeTarea');

Route::get('/edit/{id}','AgendaController@edit' )->name('edit');
Route::post('/update/{id}','AgendaController@update' )->name('update');

Route::get('/deleteMateria/{id}','AgendaController@deleteMateria' )->name('deleteMateria');
Route::get('/deleteTarea/{id}','AgendaController@deleteTarea' )->name('deleteTarea');

Route::get('/logout', 'AgendaController@logout')->name('logout');
