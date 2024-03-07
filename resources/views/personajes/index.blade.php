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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Código a ejecutar cuando la página se carga
            let profesiones = @json($viewData['personajes']);
            cargar_personajes(profesiones);
        });
    </script>
    <canvas></canvas>


    <header class="masthead headerbackground text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column textoh2">
            <h2>Comienza la aventura</h2>
        </div>
    </header>

    <!--Cuerpo con los enlaces -->
    <div class="div">
        <div class=" justify-content-center align-items-center" id="big-div">
            
        </div>
        <br>
    </div>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- JS personalizado -->
    <script src="{{ asset('/js/espacio.js') }}"></script>
    <script src="{{ asset('/js/personajes.js')}}"></script>
</body>
</html>