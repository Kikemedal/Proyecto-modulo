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
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="wrapper2">
            <div class="image-wrapper">
            <img class="imagen_personaje" src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1583&q=80" /></div>
            <div class="header-wrapper">
              <h1>Poster Art</h1>
              <h1>See Project</h1>
            </div>
          </div>
    </div>


    
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- JS personalizado -->
    <script src="{{ asset('/js/espacio.js') }}"></script>
</body>
</html>