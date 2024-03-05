<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />

  <!-- Marcador donde incluiremos el título de la página. El primer parámetro (title) contiene el identificador y el segundo (Tienda online) contiene el valor por defecto que se usará en caso de que no se le asigne ningún valor al marcador-->
  
  <title>@yield('title', 'Plantilla de formularios')</title>   

</head>

<body>
  <!-- header -->

  <header class="masthead bg-primary text-white text-center py-4">
    <div class="container d-flex align-items-center flex-column">
      <h2>@yield('subtitle', 'Esto sera modificado por cada formulario')</h2>
    </div>
  </header>
  <!-- header -->
  
  <!-- Cuerpo que será sustituido en las vistas hijas donde se añadiran las graficas visuales -->
  <div class="container">
    @yield('content')
  </div>


  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


</body>

</html>