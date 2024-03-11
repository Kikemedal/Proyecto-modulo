<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />

  <!-- CSS espacio -->

  <link href="{{ asset('/css/espacio.css') }}" rel="stylesheet" />

  <!-- Css personalizado -->

  <link href="{{ asset('/css/formulario.css') }}" rel="stylesheet" /> 

  <!-- Css de cada formulario -->
  @yield('css')

  <!-- Marcador donde incluiremos el título de la página -->
  
  <title>@yield('title', 'Plantilla de formularios')</title>   

</head>

<body class="wrapper">


  <canvas></canvas>

  <!-- header -->

  <header class="masthead bg-primary text-white text-center py-4">
    <div class="container d-flex align-items-center flex-column">
      <h2>@yield('subtitle', 'Esto sera modificado por cada formulario')</h2>
    </div>
  </header>
  <!-- header -->
  
  <!-- Cuerpo que será sustituido en las vistas hijas donde se añadira cada formulario individualizado -->
  <div class="container">
    @yield('content')
  </div>


  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <!-- JS Espacio -->
  <script src="{{ asset('/js/espacio.js') }}"></script>

</body>

</html>