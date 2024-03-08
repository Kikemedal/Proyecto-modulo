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
        alert("1");
        let especies = @json($viewData['especies']);
        let especie_datos = especies[especie];
        alert("3");
        especie_datos.forEach(function(dato){
            alert(dato);
            let nombre_dato = Object.keys(dato);
            let label_dato = document.getElementById(nombre_dato);
            label_dato.value = dato;
        });
    }

    function cambiar_datos(){
        let especie = document.getElementById("especies").value;
        mostrar_datos(especie);
        };

    document.addEventListener("DOMContentLoaded", function() {
        select_especies();
        cambiar_datos();
    });
    
</script>
<div>
    <form action="">
        <label for="">Nombre del personaje</label>
        <input type="text">
        <label for="">Raza</label>
        <select name="especies" id="especies">
        </select>
        <label for="" id="umbral_herida">Holaa</label>
        <label for="" id="umbral_tension"></label>
        <label for="" id="exp_inicial"></label>
        <label for="" id="capacidades_especiales"></label>
        <label for="" id="caracteristicas"></label>
    </form>
</div>