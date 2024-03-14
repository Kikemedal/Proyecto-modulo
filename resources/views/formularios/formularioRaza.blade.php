@extends('templates.forms')

@section('css')
<link href="{{ asset('/css/formularioRaza.css') }}" rel="stylesheet" />
@endsection

@section('subtitle', 'Completa el nombre y la raza')

@section('content')

<!--Contenido de formulario -->

<script>

  //Esta funcion añade las epecies al select
  function select_especies(){
    let especies = @json($viewData['especies']);
    let nombres_especies = Object.keys(especies);
    let select = document.getElementById("especies");
    select.innerHTML = "";

    //Recorre el array de nombres y los añade a las opciones del select.
    nombres_especies.forEach(function(especie)
    {      
      let option = document.createElement("option");
      option.value = especie;
      option.textContent = especie;
      select.appendChild(option);
    });
  }

  //Esta funcion modifica los divs de habilidades segun la especie seleccionada
  function modificarDivs(){
    let divResultado = document.getElementById("divResultado");
    //limpiamos el div de habilidades
    while (divResultado.firstChild) {
      divResultado.removeChild(divResultado.firstChild);
    }
    //Primero obtenemos los datos que vamos a usar
    let select = document.getElementById("especies");
    let especies = @json($viewData['especies']);
    let nombres_especies = Object.keys(especies);
    //comprobamos los datos que se seleccionan por parte del usuario.
    //creamos div e inputs para añadirlos al DOM.
    for (let i=0; i<nombres_especies.length; i++){
      if(select.value == nombres_especies[i]){
        let caracteristicas = especies[select.value].caracteristicas;
        //Recorrer para clave valor
        for(let clave in caracteristicas){
          let div = document.createElement("div");
          div.className = "field w-24";
          let label = document.createElement("label");
          label.className = "glow text";
          label.textContent = clave.toUpperCase();
          if(clave == "altura media"){
            label.textContent += " (m)";
          }else if(clave == "edad"){
            label.textContent += " (años)";
          }
          let input = document.createElement("input");
          input.type = "number";
          input.value = caracteristicas[clave];
          input.readOnly = true;

          //Añadimos los elementos al div
          divResultado.appendChild(div);
          div.appendChild(label);
          div.appendChild(input);
        }
      }
    }
    caracteristicasExtras();
  }

  //Esta función se encargará de mostrar las características extras del personaje.
  function caracteristicasExtras(){
    //Muestra la raza a la derecha
    let select = document.getElementById("especies");
    let resumenEspecie = document.getElementById("resumenEspecie");
    resumenEspecie.textContent =  "Raza: " + select.value;

    //Muestra nombre a la derecha
    let Nombre = document.getElementById("Nombre");
    let resumenNombre = document.getElementById("resumenNombre");
    resumenNombre.textContent = "Nombre: " + Nombre.value;
    Nombre.addEventListener("input", function(){
      resumenNombre.textContent = "Nombre: " + Nombre.value;
      localStorage.setItem('Nombre', this.value);
    });

    let especies = @json($viewData['especies']);
    let nombres_especies = Object.keys(especies);
    let extras = document.getElementById("extras");

    //Hay que eliminar los hijos del div para que no se acumulen
    while (extras.firstChild) {
      extras.removeChild(extras.firstChild);
    }
    for (let i=0; i<nombres_especies.length; i++){
      if(select.value == nombres_especies[i]){
        //Array de las capacidades especiales
        let capacidades_especiales = especies[select.value].capacidades_especiales;
        //Creamos los parrafos 
        let parrafoUmbralHerida = document.createElement("p");
        let parrafoUmbralTension = document.createElement("p");
        let parrafoExperienciaInicial = document.createElement("p");
        //añadimos los id a los parrafos
        parrafoUmbralHerida.id = "umbral_herida";
        parrafoUmbralTension.id = "umbral_tension";
        parrafoExperienciaInicial.id ="exp_inicial";
        //Añadimos el texto a los parrafos
        parrafoUmbralHerida.textContent = "Umbral de herida: " + especies[select.value]['umbral_herida'];
        parrafoUmbralTension.textContent = "Umbral de tensión: " + especies[select.value]["umbral_tension"];
        parrafoExperienciaInicial.textContent = "Experiencia inicial: " + especies[select.value]["exp_inicial"];
        //Añadimos los parrafos al div
        extras.appendChild(parrafoUmbralHerida);
        extras.appendChild(parrafoUmbralTension);
        extras.appendChild(parrafoExperienciaInicial);
        let contador = 0;
        for(let clave in capacidades_especiales){
          let parrafo = document.createElement("p");
          parrafo.textContent = clave + ": " + capacidades_especiales[clave];
          parrafo.id = "cap_especiales" + contador;
          extras.appendChild(parrafo);
          contador ++;
        }
      }
    }
  }


  //Evento que hace que se ejecute lo de dentro una vez carga solo el html.
  //Es decir, este evento no espera a que se cargen las demas hojas de estilos
  //ni los demás scripts.
  document.addEventListener('DOMContentLoaded', function(){
    select_especies();
    modificarDivs();
    //añadir un evento al select, para que cuando cambie se ejecute la funcion que
    //escribe en los select.
    document.getElementById("especies").addEventListener("change", modificarDivs);

    let menu = document.getElementById("menu");
        menu.addEventListener('click', function(){
            window.location.href = "/";
        })
  })


  
</script>

<!-- Hay que hacer que de este html un formulario y que se envie al proximo controlador del proximo formulario -->
<br>
<form style="margin-top:150px" action="{{route('formularioNombreEnviar')}}" method="get" >
<div class="flex row w-100 ml-2" style="max-width:1200px;">
  <div class="column w-65 p-1">
    <h3 class="play-once">Personaje</h3>
    <div class="row w-100">
      <div class="field w-59">
        <label class="glow text">Nombre</label>
        <input required name="Nombre" id="Nombre" type="text" pattern="\w+" />
      </div>
      <div class="field w-39">
        <label class="glow text">Raza</label>
        <select required name="especies" id="especies">
        </select>
      </div>
    </div>
    <h3>Habilidades</h3>
    <div class="yellow mb-1">
      <div id="divResultado" class="flex row w-100 justify-space-between">
        <!-- Aqui se encuentra lo que introducimos con javascript -->
      </div>
    </div>
    <h3> Sigue complentando tu personaje </h3>
    <div class="flex row mt-1">
      <button type="submit" class="green">Siguiente</button>
      <button type="button" id="menu" class="red">Menu principal</button>
    </div>
  </div>
  <div class="flex column w-32 p-1">
    <h3>Características</h3>
    <div class="flex column mb-1 hoverable">
      <div class="glow text flex row">
        <strong id="resumenNombre">
        </strong>
        <strong id="resumenEspecie">
        </strong>
      </div>
      <div class="glow flex column p-1 pb-2">
        <div id ="extras" class="flex row justify-space-between flex-wrap">
          <!-- Aqui introducimos las caracteristicas extras con javascript -->
        </div>
      </div>
    </div>
</div>
</form>

@endsection