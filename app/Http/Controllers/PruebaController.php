<?php
// aqui creamos nuestra clase controlador con la arquitectura base de estas
namespace Laradex\Http\Controllers;
//aqui usamos el archivo que se encuentra ubicado en la siguiente ruta
use  Laradex\Http\Controllers;

//tenemos la clase de pruebacontroller que hereda de la clase controllador
Class PruebaController extends Controller {
    public function prueba($param){
        //retornamos una cadena de caracteres que nos muestra tambien el parametro que estamos recibiendo
        return ' Estoy dentro de pruebaController :o y recibi este parametro de'.$param; 
    }

}