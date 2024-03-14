@extends('templates.forms')

@section('css')
<link href="{{ asset('/css/formularioDemografico.css') }}" rel="stylesheet" />
@endsection
@section('subtitle', 'Añade la motivación de tu personaje')

@section('content')

<!--Contenido de formulario -->
<script>

document.addEventListener("DOMContentLoaded",function(){
    
    let moptivacion1_extra = document.getElementById("motivacion1_extra");
    let motivacion2_extra = document.getElementById("motivacion2_extra");

    let motivacion1 = document.getElementById("motivacion1");
    let motivacion2 = document.getElementById("motivacion2");

    motivacion1.addEventListener("input", function(){
        motivacion1_extra.textContent = "--> " + motivacion1.value;
    });

    motivacion2.addEventListener("input", function(){
        motivacion2_extra.textContent = "--> " + motivacion2.value;
    });

})

</script>
<form style="margin-top:150px" action="{{route('formularioMotivacionEnviar')}}" method="post" enctype="multipart/form-data">
  @csrf
<div class="flex row w-100 ml-2" style="max-width:1200px;">
  <div class="column w-65 p-1">
    <h3 class="play-once">Motivaciones de tu personaje</h3>
    <div class="row w-100">
      <div class="field w-59">
      <label for="motivacion1">Motivacion 1 </label>
        <input required type="text" id="motivacion1" name="motivacion1">
      </div>
      <div class="field w-39">
        <label for="">Motivacion 2</label>
        <input required type="text" id="motivacion2" name="motivacion2">
      </div>
    </div>
    <h3>Imagen de tu personaje</h3>
    <div class="yellow mb-1">
      <div id="divResultado" class="flex row w-100 justify-space-between">
        <!-- Aqui se encuentra lo que introducimos con javascript -->
        <label for="imagen">Imagen del personaje</label>
        <input required name="imagen" id="imagen" type="file">
      </div>
    </div>
    <h3> Sigue complentando tu personaje </h3>
    <div class="flex row mt-1">
      <button type="submit" class="green">Siguiente</button>
    </div>
  </div>
  <div class="flex column w-32 p-1">
    <h3>Motivaciones</h3>
    <div class="flex column mb-1 hoverable">
      <div class="glow text flex row">
        <strong>
            Motivaciones de tu personaje
        </strong>
        <strong id="resumenEspecie">
        </strong>
      </div>
      <div class="glow flex column p-1 pb-2">
        <div id ="extras" class="flex row justify-space-between flex-wrap">
          <!-- Aqui introducimos las caracteristicas extras con javascript -->
            <p> * Motivacion 1 </p><p id="motivacion1_extra"> </p>
            <p> * Motivacion 2 </p><p id="motivacion2_extra"></p>
        </div>
      </div>
    </div>
</div>
</form>


@endsection