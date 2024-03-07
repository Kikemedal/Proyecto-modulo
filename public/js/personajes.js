function cargar_personajes(){
  let personajes = {
    0: {
      'nombre': "Pepe Luis Segundo",
      'raza': "Humano mandaloriano",
      'profesion': "Cazarrecompensas",
      'talento': "asesino",
      'img': "mandalorian"
    },
    1: {
      'nombre': "Alex",
      'raza': "Humano",
      'profesion': "Contrabandista",
      'talento': "Piloto",
      'img': "alex"
    },
    2: {
      'nombre': "Kyla Ran",
      'raza': "Humano",
      'profesion': "Asesino a sueldo",
      'talento': "Mercenario",
      'img': "ren"
    },
    3: {
      'nombre': "Terimis Sela",
      'raza': "Jawa",
      'profesion': "Pionero",
      'talento': "Comerciante",
      'img': "jawa"
    },
  };

  let contador = 0;

  let nombre_personajes = Object.keys(personajes);
    nombre_personajes.forEach(function(personaje){
      // Crear un nuevo elemento div
      const nuevoDiv = document.createElement('div');

      // Configurar las clases del nuevo div
      nuevoDiv.classList.add('contenido');

      // Crear el elemento wrapper2 y configurar sus atributos
      const wrapper2 = document.createElement('div');
      wrapper2.classList.add('wrapper2');

      // Crear el contenedor de la imagen y configurar sus atributos
      const imagenWrapper = document.createElement('div');
      imagenWrapper.classList.add('image-wrapper');
      const imagen = document.createElement('img');
      imagen.classList.add('imagen_personaje');
      imagen.src = 'img/'+personajes[contador]['img']+'.jpg';

      // Agregar la imagen al contenedor de la imagen
      imagenWrapper.appendChild(imagen);

      // Crear el contenedor del encabezado y configurar sus atributos
      const headerWrapper = document.createElement('div');
      headerWrapper.classList.add('header-wrapper');
      const nombre = document.createElement('h2');
      nombre.classList.add('nombre');
      nombre.textContent = personajes[contador]['nombre'];
      const datos = document.createElement('h3');
      datos.classList.add('datos');
      datos.innerHTML = 'Nombre: '+ personajes[contador]['nombre'] +
      ' <br>Raza: '+ personajes[contador]['raza']+
      ' <br>Profesión: '+ personajes[contador]['profesion'] +
      ' <br>Talento:'+ personajes[contador]['talento'];

      // Agregar el nombre y los datos al contenedor del encabezado
      headerWrapper.appendChild(nombre);
      headerWrapper.appendChild(datos);

      // Agregar el contenedor de la imagen y el contenedor del encabezado al wrapper2
      wrapper2.appendChild(imagenWrapper);
      wrapper2.appendChild(headerWrapper);

      // Agregar el wrapper2 al nuevo div
      nuevoDiv.appendChild(wrapper2);

      const contenedorEspecifico = document.getElementById('big-div');

      contenedorEspecifico.appendChild(nuevoDiv);// Puedes cambiar esto según tu estructura HTML

      contador = contador +1;
        });

}
cargar_personajes();

