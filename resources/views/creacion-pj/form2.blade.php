<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
</head>
<body>
    <div>
        <form>
            <label for="">Profesión</label>
            <select name="profesiones[]" id="profesiones">
                <option value="cazarrecompensas">Cazarrecompensas</option>
                <option value="pionero">Pionero</option>
                <option value="contrabandista">Contrabandista</option>
                <option value="tecnico">Técnico</option>
                <option value="pistolero_sueldo">Pistolero a sueldo</option>
            </select>
    
            <label for="">Talento</label>
            <select name="talentos[]" id="talentos">
                <option value="asesino">Asesino</option>
                <option value="tecnificado">Tecnificado</option>
                <option value="supervivivencia">Supervivivencia</option>
            </select>
            <img src="" alt="" id="imagen">
        </form>
    </div>
</body>
</html>