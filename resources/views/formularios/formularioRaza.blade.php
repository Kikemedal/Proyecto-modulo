@extends('templates.forms')

@section('css')
<link href="{{ asset('/css/formularioRaza.css') }}" rel="stylesheet" />
@endsection

@section('subtitle', 'Completa el nombre y la raza')

@section('content')

<!--Contenido de formulario -->

<script>
    function select_especies(){
        let especies = @json($viewData['especies']);
        let nombres_especies = Object.keys(especies);
        let select = document.getElementById("especies");
        select.innerHTML = "";

        nombres_especies.forEach(function(especie){
            let option = document.createElement("option");
            option.value = especie;
            option.text = especie;

            select.appendChild(option);
        });
    }

    function mostrar_datos(especie){
        let especies = @json($viewData['especies']);
        let especie_datos = especies[especie];
        let nombres_dato = Object.keys(especie_datos);
        let contador = 0;

        let div = document.getElementById('div');
        div.innerHTML = '';

        nombres_dato.forEach(function(dato){
            contador = contador +1;
            if (contador<=3) {
                let label_dato = document.getElementById(dato);
                label_dato.textContent = especie_datos[dato];
            } 
            else {
                let datos_array = especie_datos[dato];
                let nombre_datos_array = Object.keys(datos_array);
                nombre_datos_array.forEach(function(dato_array){
                    let nuevoLabel = document.createElement("label");
                    nuevoLabel.textContent = dato_array + ": ";
                    nuevoLabel.id = dato_array;
                    let div = document.getElementById('div');
                    div.appendChild(nuevoLabel);
                    let nuevoLabel2 = document.createElement("label");
                    nuevoLabel2.textContent = datos_array[dato_array];
                    nuevoLabel2.id = dato_array;
                    div.appendChild(nuevoLabel2);
                    let saltoDeLinea = document.createElement("br");
                    div.appendChild(saltoDeLinea);
                })

            }
            
        });
    }

    function cambiar_datos(){
        let select = document.getElementById("especies");
        let especie = select.options[select.selectedIndex].value;
        mostrar_datos(especie);
        };

    document.addEventListener("DOMContentLoaded", function() {
        let prueba = document.getElementById("umbral_herida").value;
        if (prueba != ""){
            select_especies();
            cambiar_datos();
        }
        var cambio = document.getElementById('especies');
        cambio.addEventListener('change', function() { cambiar_datos() }, false);
    });
    
</script>

<div class="flex row w-100 ml-2" style="max-width:1200px;">
  <div class="column w-65 p-1">
    <h2 class="play-once">Personaje</h2>
    <div class="row w-100">
      <div class="field w-59">
        <label class="glow text">Nombre</label>
        <input type="text" pattern="\w+" />
      </div>
      <div class="field w-39">
        <label class="glow text">Raza</label>
        <select name="especies" id="especies">
            @for
        </select>
      </div>
    </div>
    <h2>Habilidades</h2>
    <div class="yellow mb-1">
      <div class="flex row w-100 justify-space-between">
        <div class="field w-24">
          <label class="glow text">BOD</label>
          <input type="number" />
        </div>
        <div class="field w-24">
          <label class="glow text">AGI</label>
          <input type="number" />
        </div>
        <div class="field w-24">
          <label class="glow text">REA</label>
          <input type="number" />
        </div>
        <div class="field w-24">
          <label class="glow text">STR</label>
          <input type="number" />
        </div>
      </div>
      <div class="flex row w-100 justify-space-between">
        <div class="field w-24">
          <label class="glow text">WIL</label>
          <input type="number" />
        </div>
        <div class="field w-24">
          <label class="glow text">LOG</label>
          <input type="number" />
        </div>
        <div class="field w-24">
          <label class="glow text">INT</label>
          <input type="number" />
        </div>
        <div class="field w-24">
          <label class="glow text">CHA</label>
          <input type="number" />
        </div>
      </div>
      <div class="flex row w-100 justify-space-between">
        <div class="field w-24">
          <label class="glow text">EDG</label>
          <input type="number" />
        </div>
        <div class="field w-24">
          <label class="glow text">ESS</label>
          <input type="number" />
        </div>
        <div class="field w-24">
          <label class="glow text">MAG/RES</label>
          <input type="number" />
        </div>
        <div class="w-24"></div>
      </div>
    </div>
    <h2> Elige la profesión </h2>
    <div class="flex row mt-1">
      <button class="green">Siguiente</button>
      <button class="red">Resetear</button>
    </div>
  </div>
  


  <div class="flex column w-32 p-1">
    <h2>Características</h2>
    <div class="flex column mb-1 hoverable">
      <div class="glow text flex row justify-space-between">
        <strong>
          Ares Predator II
        </strong>
        <strong>
          ¥800
        </strong>
      </div>
      <div class="glow flex column p-1 pb-2">
        <div class="flex row justify-space-between flex-wrap">
          <div class="flex column">
            <strong>DV</strong>
            <span class="glow text">12</span>
          </div>
          <div class="flex column px-1">
            <strong>MODES</strong>
            <span class="glow text">SA/BF</span>
          </div>
          <div class="flex column px-1">
            <strong>AR</strong>
            <span class="glow text">9/9/7/-/-</span>
          </div>
          <div class="flex column px-1">
            <strong>AMMO</strong>
            <span class="glow text">15(c)</span>
          </div>
          <div class="flex column px-1">
            <strong>AVAIL</strong>
            <span class="glow text">2(L)</span>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection