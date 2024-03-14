@extends('templates.forms')

@section('css')
<link href="{{ asset('/css/formularioDemografico.css') }}" rel="stylesheet" />
@endsection

@section('subtitle', 'Completa los datos sobre tu personaje')

@section('content')

<script>

document.addEventListener("DOMContentLoaded",function(){
    //Seleccionamos los elementos que vamos a modificar con javascript
    let extraGenero = document.getElementById("genero_extra");
    let extraEdad = document.getElementById("edad_extra");  
    let extraAltura = document.getElementById("altura_extra");  
    let extraTipoCuerpo = document.getElementById("tipo_cuerpo_extra"); 
    let extraOjos = document.getElementById("ojos_extra");  
    let extraCaractExtra = document.getElementById("caract_extra_extra");   

    //Cogemos los elementos que vamos a ponerles add event listener:
    let genero = document.getElementById("genero");
    let edad = document.getElementById("edad");
    let altura = document.getElementById("altura");
    let tipo_cuerpo = document.getElementById("tipo_cuerpo");
    let ojos = document.getElementById("ojos");
    let caract_extra = document.getElementById("caract_extra");


    genero.addEventListener("input", function(){
        extraGenero.textContent = "--> " + genero.value;
    });

    edad.addEventListener("input", function(){
        extraEdad.textContent = "--> " + edad.value;
    });

    altura.addEventListener("input", function(){
        extraAltura.textContent = "--> " + altura.value;
    });

    tipo_cuerpo.addEventListener("input", function(){
        extraTipoCuerpo.textContent = "--> " + tipo_cuerpo.value;
    });

    ojos.addEventListener("input", function(){
        extraOjos.textContent = "--> " +  ojos.value;
    });

    caract_extra.addEventListener("input", function(){
        extraCaractExtra.textContent = "--> " + caract_extra.value;
    });


})


</script>

<!--Contenido de formulario -->
<form style="margin-top:100px;" action="{{ route('formularioDemograficoEnviar') }}" method="get" >
<div class="flex row w-100 ml-2" style="max-width:1200px;">
  <div class="column w-65 p-1">
    <h3>Habilidades</h3>
    <div class="yellow mb-1">
      <div id="divResultado" class="flex row w-100 justify-space-between">
        <!-- Aqui se encuentra lo que introducimos con javascript -->
        <label for="genero">Género</label>
        <input required type="text" id="genero" name="genero">
        <label for="edad">Edad</label>
        <input required type="number" id="edad" name="edad">
        <label for="altura">Altura</label>
        <input required type="text" id="altura" name="altura">
        <label for="tipo_cuerpo">Tipo de cuerpo</label>
        <input required type="text" id="tipo_cuerpo" name="tipo_cuerpo">
        <label for="ojos">Ojos</label>
        <input required type="text" id="ojos" name="ojos">
        <label for="caract_extra">Características destacables</label>
        <input required type="text" id="caract_extra" name="caract_extra">
      </div>
    </div>
    <h3> Sigue complentando tu personaje </h3>
    <div class="flex row mt-1">
      <button type="submit" class="green">Siguiente</button>
    </div>
  </div>
  <div class="flex column w-32 p-1">
    <h3>Características</h3>
    <div class="flex column mb-1 hoverable">
        <div class="glow text flex row">
            <strong>
            Características de tu personaje:
            </strong>
      </div>
      <div class="glow flex column p-1 pb-2">
        <div id ="extras" class="flex row justify-space-between flex-wrap">
          <!-- Aqui introducimos las caracteristicas extras con javascript -->
          <p> * Genero </p><p id="genero_extra"> </p>
          <p> * Edad </p><p id="edad_extra"></p>
          <p> * Altura </p> <p id="altura_extra"></p>
          <p> * Tipo de cuerpo </p><p id="tipo_cuerpo_extra"></p>
          <p> * Ojos </p><p id="ojos_extra"></p>
          <p> * Característica extra </p><p id="caract_extra_extra"></p>
        </div>
      </div>
    </div>
</div>
</form>

@endsection