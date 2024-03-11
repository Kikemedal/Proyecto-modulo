@extends('templates.forms')

@section('subtitle', 'Completa los datos básicos')

@section('content')

<!--Contenido de formulario -->
<div>
    <form action="{{ route('formularioDemograficoEnviar') }}">
        <label for="">Género</label>
        <input type="text" id="genero" name="genero">
        <label for="">Edad</label>
        <input type="number" id="edad" name="edad">
        <label for="">Altura</label>
        <input type="text" id="altura" name="altura">
        <label for="">Tipo de cuerpo</label>
        <input type="text" id="tipo_cuerpo" name="tipo_cuerpo">
        <label for="">Ojos</label>
        <input type="text" id="ojos" name="ojos">
        <label for="">Características destacables</label>
        <input type="text" id="caract_extra" name="caract_extra">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

@endsection