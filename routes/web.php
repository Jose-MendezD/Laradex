<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//aqui genero mi primera ruta  con parametros   si asignamos un signo de interrogacion
//decimos que un valor puede ser opcional 
//Route::get('/name/{name}/lastname/{lastname?}',function($name,$lastname='Apellido') {
   //return 'hola soy '. $name .$lastname;});
//aqui genero mi primer ruta

//Route::get('/mi_primer_ruta',function() {
  //  return 'hello word, esta es mi primer ruta :3';});
//usalos la ruta nombrando  pruebacontroller y utilizamos @ para referirnos a la funcion prueba
//Route::get('prueba{name}','Pruebacontroller@prueba');

//creamos una ruta  con resource para referirme a un controlador del mismo tipo
Route::resource('trainers','TrainerController');
