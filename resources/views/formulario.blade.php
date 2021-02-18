@extends('plantilla')
@section('title','Página principal')
@section('content')


<div class="container text-center mt-5">
    <div class="container alert alert- alert-primary text-center p-2">
        <form action="{{route('formulario.store')}}" method="post">
            @csrf
            <div class="from-group ">
                <label for="nombre">Nombre:</label>
                <input type=" text" class="form-control mx-auto" style="width: 500px" name="nombre" value="{{old('nombre')}}">
            </div>
            <div class="from-group ">
                <label for="email">Email:</label>
                <input type=" email" class="form-control mx-auto" style="width: 500px" name="email" value="{{old('email')}}">
            </div>
            <div class="from-group">
                <label for="mensaje">Sugerencia:</label><br>
                <textarea name="mensaje"  id="" cols="60" rows="10" value="{{old('mensaje')}}"></textarea>
            </div>
            <button type="submit" class=" btn btn-primary mb-2">Añadir</button>
          
        </form>
    </div>


@endsection