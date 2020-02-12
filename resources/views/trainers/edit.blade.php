<!-- usaremos el extends para heredar el diseño de app.blade.php-->
@extends('layouts.app')
<!-- usamos el section para que utilice el titulo que estamos marcando-->
@section('title','Trainers Edit ')


@section('content')
        <!--Esto permitira editar la informacion de los  entrenadores-->
        <!--usamos la directiva para generar un token de manera automatica  -->
         <!--usamos enctyple form data para poder recibir archivos-->
  
<form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
<div class="form-group">
    <label for="">Nombre</label>
<input type="text" name="name" value="{{$trainer->name}}" class="form-control">
</div>

<div class="form-group">
    <label for="">Avatar</label>
<input type="file" name="avatar" value="{{$trainer->avatar}}">
</div>

<button type="submit" class="btn btn-primary">Editar</button>
</form>

@endsection
