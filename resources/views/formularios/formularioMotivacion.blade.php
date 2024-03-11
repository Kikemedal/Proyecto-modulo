@extends('templates.forms')

@section('subtitle', 'Añade la motivación de tu personaje')

@section('content')

<!--Contenido de formulario -->
<div>
    <form action="{{ route('formularioMotivacionEnviar') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Motivacion</label>
        <input type="text" id="motivacion1" name="motivacion1">
        <label for="">Motivacion</label>
        <input type="text" id="motivacion2" name="motivacion2">
        <label for="">Imagen del personaje</label>
        <input name="imagen" id="imagen" type="file">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

@endsection