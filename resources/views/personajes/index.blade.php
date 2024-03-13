<!-- Esta pagina tendrá los tres enlaces para poder crear personaje o verlos listados -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <!-- CSS personalizado -->
    <link href="{{ asset('/css/espacio.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/personajes_index.css') }}" rel="stylesheet" />
    <title>Personajes</title>
</head>
<body class="wrapper">
    <canvas></canvas>


    <header class="masthead headerbackground text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column textoh2">
            <h2>Echale un vistazo a tus personajes</h2>
            
        </div>
    </header>

    <!--Cuerpo con los enlaces -->
    <div class="div">
        <div class=" justify-content-center align-items-center" id="big-div">
            @foreach ($viewData['personajes'] as $personajes => $personaje)
                <div class="contenido">
                    <div class="wrapper2" id='{{$personaje['id']}}' onclick="imagen_efect({{$personaje['id']}})">
                        <div class="image-wrapper">
                            <?php $imagen = $personaje['img']; ?>
                            <img class="imagen_personaje" src="{{asset('storage/img/' . $imagen)}}" alt="imagen del personaje" id="imagen_{{$personaje['id']}}">
                        </div>
                        <div class="header-wrapper" id="headerWrapper_{{$personaje['id']}}">
                            <h2 class="nombre">{{$personaje['name']}}</h2>
                            <h3 class="datos" id="datos_{{$personaje['id']}}">
                                Nombre: {{$personaje['name']}}
                                <br>Raza: {{$personaje['species']}}
                                <br>Profesión: {{$personaje['profesion']}}
                                <br>Talento: {{$personaje['talent']}}
                                <br>Genero: {{$personaje['gender']}}
                                <br>Altura: {{$personaje['height']}}
                                <br>Tipo de cuerpo: {{$personaje['body_type']}}
                                <br>ojos: {{$personaje['eyes']}}
                            </h3>
                            <h3 class="datos2" id="datos2_{{$personaje['id']}}">
                                <br>Datos extra: {{$personaje['extra_charact']}}
                                <br>Motivación: {{$personaje['motivation1']}}
                                <br>Motivación 2: {{$personaje['motivation2']}}
                                <a class="boton_eliminar" href="{{route('personajes.eliminar', ['id'=> $personaje['id']])}}">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    ELIMINAR
                                  </a>
                                  
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <br>
    </div>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- JS personalizado -->
    <script src="{{ asset('/js/espacio.js') }}"></script>
    <script>
        function imagen_efect(id){
            wrapper2 = document.getElementById(id);
            datos = document.getElementById('datos_'.id);
            datos2 = document.getElementById('datos2_'.id);
        let estadoActual = 0;
        wrapper2.classList.toggle('hovered');
        if (estadoActual === 0) {
            datos.classList.add('visible');
            datos2.classList.remove('visible');
            estadoActual = 1;
        } else {
            datos.classList.remove('visible');
            datos2.classList.add('visible');
            estadoActual = 0;
        }
    }
</script>
</body>
</html>