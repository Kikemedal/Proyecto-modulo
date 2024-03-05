<!-- Esta pagina tendrá los tres enlaces para poder crear personaje o verlos listados -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS personalizado -->
    <link href="{{ asset('/css/index.css') }}" rel="stylesheet" />
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <title>Comienza la aventura</title>
</head>
<body class="wrapper">

    <canvas>

    </canvas>


    <header class="masthead bg-primary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>Comienza la aventura</h2>
        </div>
    </header>

    <!--Cuerpo con los enlaces -->
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="text-center">
            <a href="/ruta-listado" class="btn btn-primary btn-lg m-3 centered-link">Ver listado de personajes</a>
            <a href="/ruta-creacion" class="btn btn-primary btn-lg m-3 centered-link">Crear personaje</a>
            <a href="/ruta-login" class="btn btn-primary btn-lg m-3 centered-link">Iniciar sesión</a>
        </div>
    </div>

    
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- JS personalizado -->
    <script src="{{ asset('/js/index.js') }}"></script>
</body>
</html>