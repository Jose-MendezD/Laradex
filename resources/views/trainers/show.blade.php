@extends('layouts.app')

@section('title','Trainer')

 @section('content')
     <!-- mostraremos el contenido de los entrenadoresy-->
     <img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px;" class="card-img-top 
         rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">
         <div class="text-center">
         
         <h1>{{$trainer->slug}}</h1>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta voluptatibus adipisci delectus? Voluptas labore excepturi qui aperiam officia delectus eligendi. Aspernatur animi distinctio nesciunt harum fugit culpa soluta enim maxime.
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti modi corporis optio cumque magnam. Quod, provident unde. Autem asperiores et voluptatibus hic, unde ea commodi dolorem delectus ad. Reprehenderit, cum.
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, molestiae cumque ipsam impedit fuga laborum laudantium esse aliquam laboriosam tempore quo eum facere expedita veniam repellendus id! Quo, asperiores magnam. 
            </p>
            <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a> 
         </div>
     

    
@endsection