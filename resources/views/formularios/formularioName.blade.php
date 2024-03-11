@extends('templates.forms')

@section('subtitle', 'Completa el nombre y la raza')

@section('content')

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
<div class="contenedor">
    <form action="{{ route('formularioNombreEnviar') }}" id="form">
        <label for="">Nombre del personaje</label>
        <input name="nombre" id="nombre" type="text">
        <label for="">Raza</label>
        <select name="especies" id="especies">
        </select>
        <label for="" id="">Umbral de herida:</label>
        <label for="" id="umbral_herida"></label> <br>
        <label for="" id="">Umbral de tensión</label>
        <label for="" id="umbral_tension"></label><br>
        <label for="" id="">Experiencia inicial: </label>
        <label for="" id="exp_inicial"></label><br>
        <label for="" id="capacidades_especiales"></label>
        <label for="" id="capacidades_especiales"></label>
        <label for="" id="caracteristicas"></label>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <div id="div">

    </div>
</div>


@endsection