<!-- usaremos el extends para heredar el diseño de app.blade.php-->
@extends('layouts.app')
<!-- usamos el section para que utilice el titulo que estamos marcando-->
@section('title','Trainers Create ')


@section('content')
        <!--se creo un formulario con el metodo post para poder hacer request-->
        <!--Esto permitira agregar entrenadores-->
        <!--usamos la directiva para generar un token de manera automatica  -->
         <!--usamos enctyple form data para poder recibir archivos-->
  
<form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
    @csrf
<div class="form-group">
    <label for="">Nombre</label>
    <input type="text" name="name"class="form-control">
</div>

<div class="form-group">
    <label for="">Avatar</label>
    <input type="file" name="avatar">
</div>

<button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
