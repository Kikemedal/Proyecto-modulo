@extends('templates.forms')

@section('css')
<link href="{{ asset('/css/formularioClases.css') }}" rel="stylesheet" />
@endsection

@section('subtitle', 'Elige las calses de tu personaje')

@section('content')

<!--Contenido de formulario -->
<script>

    document.addEventListener("DOMContentLoaded", function() {
        function cambiar_select(){
            let profesion = document.getElementById("profesiones").value;
            select_hijo(profesion);
        };
        function select_padre(){
            let profesion = document.getElementById("profesiones").value;
            let profesiones = @json($viewData['profesiones']);
            let nombre_profesiones = Object.keys(profesiones);
            let select = document.getElementById("profesiones");
            select.innerHTML = "";

            nombre_profesiones.forEach(function(profesion){
                let option = document.createElement("option");
                option.value = profesion;
                option.text = profesion;

                select.appendChild(option);
            });
            cambiar_select();
        }

        function select_hijo(profesion){
            let profesiones = @json($viewData['profesiones']);
            let talentos = profesiones[profesion]['talentos'];
            let select = document.getElementById("talentos");
            select.innerHTML = "";

            talentos.forEach(function(talento){
                let option = document.createElement("option");
                option.value = talento;
                option.text = talento;

                select.appendChild(option);
            });
        }
        select_padre();

        var cambio = document.getElementById('profesiones');
        cambio.addEventListener('change', function() { cambiar_select(cambio) }, false);
    });

</script>


<form style="margin-left:250px; margin-top:230px"action="{{route('formularioClasesEnviar')}}" method="get" >
    <div class="flex row w-100 ml-2" style="max-width:1200px;">
        <div class="column w-65 p-1">
            <h3 class="play-once">Elige la profesion de tu personaje</h3>
            <div class="row w-100">
                <div class="field w-59">
                    <label class="glow text">Profesión</label>
                    <select  name="profesiones" id="profesiones"></select>
                </div>
                <div class="field w-39">
                    <label class="glow text">Talento</label>
                    <select name="talentos" id="talentos"></select>
                </div>
            </div>
            <h3> Sigue complentando tu personaje </h3>
            <div class="flex row mt-1">
                <button type="submit" class="green">Siguiente</button>
            </div>
        </div>
    </div>
</form>

@endsection