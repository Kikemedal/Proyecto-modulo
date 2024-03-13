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
    <link href="{{ asset('/css/index.css') }}" rel="stylesheet" />
    <title>Comienza la aventura</title>
</head>
<body class="wrapper">

    <canvas></canvas>


    <header class="masthead headerbackground text-white text-center py-4">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="textoh2 flex-grow-1 text-center">
            <h2>Comienza la aventura</h2>
        </div>
        @if (Auth::check())
            <div class="d-flex align-items-center">
                <img class="user-icon" src="{{ asset('/img/usuario.png') }}" alt="User Icon">
                <span class="user-name">{{ Auth::user()->name }}</span>
            </div>
        @else
            <div class="d-flex align-items-center">
                <a href="{{ route('register') }}" class="btn btn-primary transparente boton-registrar">Registrate</a>
            </div>
        @endif
    </div>
    </header>

    <!--Cuerpo con los enlaces -->
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="text-center">
            <a href="{{route('personajes.index', ['id'=> Auth::id()])}}" class="btn btn-lg m-3 centered-link transparente zoom-image">
                <div class="overlay-text">Personajes</div>
                <img src="{{ asset ('/img/marte.png') }}">
            </a> 
            <a href="{{ route('Formulario_razas') }}" class="btn btn-lg m-3 centered-link transparente zoom-image">
                <div class="overlay-text">Crear personaje</div>
                <img src="{{ asset ('/img/tierra.png') }}">
            </a>
            <a href=  "{{ route('login') }}" class="btn btn-lg m-3 centered-link transparente zoom-image">
                <div class="overlay-text">Iniciar sesión</div>
                <img src="{{ asset ('/img/morado.png') }}">
            </a>
        </div>
    </div>


    
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- JS personalizado -->
    <script src="{{ asset('/js/espacio.js') }}"></script>
</body>
</html>