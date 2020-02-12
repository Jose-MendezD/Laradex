<?php
// Este controlador lo creamos con el comando php artisan make:controller TrainerController -resource para que se cree con
// la estructura de un crud
namespace Laradex\Http\Controllers;

use Laradex\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //manda a llamar a todos los entrenadores registrados
        $trainers = Trainer::all();
        //compact genera un array con la informacion que le asignemos
        return view('trainers.index',compact('trainers'));


        //mandamos un mensaje desde el resource
        //return 'hola desde el controldor de resource';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retornamos una vista para crear entrenadores pokemon
        // especificamos con el . que esta en la carpeta trainers / create

        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            //aqui concatenamos la fecha con el nombre del archivo para que no se repita
            $name = time().$file->getClientOriginalName(); 
            //asignamos donde estara y su nombre
            $file->move(public_path().'/images/', $name);
            //return $name;
        }

        //return  $request;
        // con este return podemos ver el valor que le estamos dando a la variable name
       // return $request->input('name');

        //con este return podemos ver todos los datos que se estan guardando 
        //return $request->all();

        // creamos un objeto nuevo trainer que recibira el valor name y lo almacenara
        $trainer = new Trainer();
        $trainer->name = $request->input('name');
        $trainer->avatar =$name;
        $trainer->save();
       return 'saved';
       // return $request->input('name');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer) //$slug)
    {
       // $trainer = Trainer::where('slug','=',$slug)->firstOrFail();
       // return $slug;
        //$trainer = Trainer::find($id);
        //return $trainer;
        //vamos a retornar una vista mostrar
        return view('trainers.show',compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        // usamos el inpicit byid para poder trabajr con slug al editar
        return view('trainers.edit',compact('trainer'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
      $trainer->fill($request->except('avatar'));
      if($request->hasFile('avatar')){
        $file = $request->file('avatar');
        //aqui concatenamos la fecha con el nombre del archivo para que no se repita
        $name = time().$file->getClientOriginalName(); 
        //asignamos donde estara y su nombre
        $trainer->avatar = $name;
        $file->move(public_path().'/images/', $name);
        //return $name;
    }
      $trainer->save();
      return 'updated';  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
