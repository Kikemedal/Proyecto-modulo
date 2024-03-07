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
    <title>Comienza la aventura</title>
</head>
<body class="wrapper">

    <canvas></canvas>


    <header class="masthead headerbackground text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column textoh2">
            <h2>Comienza la aventura</h2>
        </div>
    </header>

    <!--Cuerpo con los enlaces -->
    <div class="div">
        <div class=" justify-content-center align-items-center" id="big-div">
            <div class="contenido">
                <div class="wrapper2">
                    <div class="image-wrapper">
                        <img class="imagen_personaje" src="img/mandalorian.jpg" />
                    </div>
                    <div class="header-wrapper">
                      <h2 class="nombre">PEPE LUIS SEGUNDO</h2>
                      <h3 class="datos">Nombre: Pepe Luis Segundo <br>
                        Raza: Humano mandaloriano <br>
                        Profesión: Cazarrecompensas <br>
                        Talento: Asesino
                      </h3>
                    </div>
                </div>
            </div>
            <div class="contenido">
                <div class="wrapper2">
                    <div class="image-wrapper">
                        <img class="imagen_personaje" src="img/ren.jpg" />
                    </div>
                    <div class="header-wrapper">
                      <h2 class="nombre">Kyla Ran</h2>
                      <h3 class="datos">Nombre: Kyla Ran <br>
                        Raza: Humano <br>
                        Profesión: Asesino a sueldo <br>
                        Talento: Mercenario
                      </h3>
                    </div>
                </div>
            </div>
            <div class="contenido">
                <div class="wrapper2">
                    <div class="image-wrapper">
                        <img class="imagen_personaje" src="img/alex.jpg" />
                    </div>
                    <div class="header-wrapper">
                      <h2 class="nombre">Alex</h2>
                      <h3 class="datos">Nombre: Alex <br>
                        Raza: Humano <br>
                        Profesión: Contrabandista <br>
                        Talento: Piloto
                      </h3>
                    </div>
                </div>
            </div> 
            <div class="contenido">
                <div class="wrapper2">
                    <div class="image-wrapper">
                        <img class="imagen_personaje" src="img/jawa.jpg" />
                    </div>
                    <div class="header-wrapper">
                      <h2 class="nombre">Terimis Sela</h2>
                      <h3 class="datos">Nombre: Terimis Sela <br>
                        Raza: Jawa <br>
                        Profesión: Pionero <br>
                        Talento: Comerciante
                      </h3>
                    </div>
                </div>
            </div> 
        </div>
        <br>
    </div>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- JS personalizado -->
    <script src="{{ asset('/js/espacio.js') }}"></script>
</body>
</html>