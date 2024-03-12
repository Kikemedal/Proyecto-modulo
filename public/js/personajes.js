function cargar_personajes(personajes){

  let contador = 0;
  let estadoActual = 0;

  let nombre_personajes = Object.keys(personajes);
    nombre_personajes.forEach(function(personaje){
      // Crear un nuevo elemento div
      const nuevoDiv = document.createElement('div');

      // Configurar las clases del nuevo div
      nuevoDiv.classList.add('contenido');

      // Crear el elemento wrapper2 y configurar sus atributos
      const wrapper2 = document.createElement('div');
      wrapper2.classList.add('wrapper2');
      wrapper2.id = personajes[contador]['id'];

      // Crear el contenedor de la imagen y configurar sus atributos
      const imagenWrapper = document.createElement('div');
      imagenWrapper.classList.add('image-wrapper');
      const imagen = document.createElement('img');
      imagen.classList.add('imagen_personaje');
      imagen.src = 'img/'+personajes[contador]['img'];
      imagen.id = "imagen_"+personajes[contador]['id'];

      // Agregar la imagen al contenedor de la imagen
      imagenWrapper.appendChild(imagen);

      // Crear el contenedor del encabezado y configurar sus atributos
      const headerWrapper = document.createElement('div');
      headerWrapper.classList.add('header-wrapper');
      headerWrapper.id = "headerWrapper_"+personajes[contador]['id'];
      const nombre = document.createElement('h2');
      nombre.classList.add('nombre');
      nombre.textContent = personajes[contador]['name'];
      const datos = document.createElement('h3');
      datos.classList.add('datos');
      datos.id = "datos_"+personajes[contador]['id'];
      const datos2 = document.createElement('h3');
      datos2.classList.add('datos2');
      datos2.id = "datos2_"+personajes[contador]['id'];
      datos.innerHTML = 'Nombre: '+ personajes[contador]['name'] +
      ' <br>Raza: '+ personajes[contador]['species']+
      ' <br>Profesión: '+ personajes[contador]['profesion'] +
      ' <br>Talento: '+ personajes[contador]['talent']+
      ' <br>Genero: '+ personajes[contador]['gender']+
      ' <br>Altura: '+ personajes[contador]['height'] +
      ' <br>Tipo de cuerpo: '+ personajes[contador]['body_type']+
      ' <br>ojos: '+ personajes[contador]['eyes'];
      datos2.innerHTML = 
      ' <br>Datos extra: '+ personajes[contador]['extra_charact']+
      ' <br>Motivación: '+ personajes[contador]['motivation1']+
      ' <br>Motivación 2: '+ personajes[contador]['motivation2'];

      // Agregar el nombre y los datos al contenedor del encabezado
      headerWrapper.appendChild(nombre);
      headerWrapper.appendChild(datos);
      headerWrapper.appendChild(datos2);

      // Agregar el contenedor de la imagen y el contenedor del encabezado al wrapper2
      wrapper2.appendChild(imagenWrapper);
      wrapper2.appendChild(headerWrapper);

      // Agregar el wrapper2 al nuevo div
      nuevoDiv.appendChild(wrapper2);

      // Agregar el botón al wrapper2

      const contenedorEspecifico = document.getElementById('big-div');

      contenedorEspecifico.appendChild(nuevoDiv);// Puedes cambiar esto según tu estructura HTML

      wrapper2.addEventListener('click', function () {
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
    });
    contador = contador +1;
        });
}

