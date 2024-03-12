<?php

namespace App\Http\Controllers;

use App\Models\character;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class FormulariosController extends Controller
{
    public function formularioNombre(){
        $especies = [
            'Humano' => [
                'umbral_herida' => 10,
                'umbral_tension' => 10,
                'exp_inicial' => 110,
                'capacidades_especiales' => [
                    'Humano' => 'Los humanos empiezan con ventaja en tiradas de 2 habilidades
                    a elegir'
                ],
                'caracteristicas' => [
                    'fortaleza' => 2,
                    'agilidad' => 2,
                    'intelecto' => 2,
                    'astucia' => 2,
                    'voluntad' => 2,
                    'presencia' => 2
                ]
                ],
            'Jawa' => [
                'umbral_herida' => 9,
                'umbral_tension' => 10,
                'exp_inicial' => 100,
                'capacidades_especiales' => [
                    'Morador del Desierto' => 'Los jawa eliminan las desventajas por condiciones
                    ambientales áridas',
                    'Tamaño' => 'Los jawas tienen una Silueta de 0'
                ],
                'caracteristicas' => [
                    'fortaleza' => 2,
                    'agilidad' => 2,
                    'intelecto' => 3,
                    'astucia' => 2,
                    'voluntad' => 2,
                    'presencia' => 1
                ]
                ],
            'Arkaniano' => [
                'umbral_herida' => 10,
                'umbral_tension' => 10,
                'exp_inicial' => 100,
                'capacidades_especiales' => [
                    'Arkaniano' => 'Los arkanianos tienen ventana en las acciones de coacción',
                    'Elite Intelectual' => 'Los arkananos tienen ventaja en todas las tiradas de
                    Habilidades de Conocimientos'
                ],
                'caracteristicas' => [
                    'fortaleza' => 2,
                    'agilidad' => 2,
                    'intelecto' => 3,
                    'astucia' => 2,
                    'voluntad' => 2,
                    'presencia' => 1
                ]
                ],
            'Herglic' => [
                'umbral_herida' => 14,
                'umbral_tension' => 10,
                'exp_inicial' => 90,
                'capacidades_especiales' => [
                    'Herglic' => 'Los herglic tienen ventana en las acciones de coacción o carisma',
                ],
                'caracteristicas' => [
                    'fortaleza' => 3,
                    'agilidad' => 2,
                    'intelecto' => 2,
                    'astucia' => 2,
                    'voluntad' => 1,
                    'presencia' => 2
                ]
                ],
            'Nautolan' => [
                'umbral_herida' => 12,
                'umbral_tension' => 10,
                'exp_inicial' => 100,
                'capacidades_especiales' => [
                    'Nautolan' => 'Los nautolan tienen ventana en las acciones de atletismo',
                    'Anfibio' => 'Los nautolan pueden respirar bajo el agua sin penalización alguna',
                    'Sensor de Feromonas' => 'Los nautolan pueden eliminar toda desventaja impuesta por 
                    la ocultación de un objetivo que esté a Corto Alcance'
                ],
                'caracteristicas' => [
                    'fortaleza' => 2,
                    'agilidad' => 2,
                    'intelecto' => 2,
                    'astucia' => 2,
                    'voluntad' => 2,
                    'presencia' => 2
                ]
                ],
            'Wookiee' => [
                'umbral_herida' => 14,
                'umbral_tension' => 8,
                'exp_inicial' => 90,
                'capacidades_especiales' => [
                    'Wookiee' => 'Los Wookiee tienen ventana en las peleas',
                    'Furia wookiee' => 'Si un wookiee a sufrido heridas, añadimos +1 al daño infiglido con ataques de
                    pelea y cuerpo a cuerpo. Si un wookiee sufre heridas críticas, se sustituye el anterior +1 por un +2'
                ],
                'caracteristicas' => [
                    'fortaleza' => 2,
                    'agilidad' => 2,
                    'intelecto' => 2,
                    'astucia' => 2,
                    'voluntad' => 2,
                    'presencia' => 2
                ]
            ]
            ];
        $viewData = [];
        $viewData['especies'] = $especies;
        return view('formularios.formularioName')->with('viewData', $viewData);
    }
    

    public function formularioNombreEnviar(Request $Request){
            $nombre = $Request->input('nombre');
            $especie = $Request->input('especies');
            echo '<script>';
            echo 'alert('.$nombre.');';
            echo 'alert('.$especie.');';
            echo '</script>';
            $Request->session()->put('formulario_data', ['personaje' => ['nombre' => $nombre, 'especie' => $especie]]);
            $profesiones = [
                'Cazarrecompensas' => [
                    'talentos' => ['asesino', 'tecnificado', 'supervivencia']
                ],
                'Pionero' => [
                    'talentos' => ['fronterizo', 'explorador', 'comerciante']
                ],
                'Pistolero a sueldo' => [
                    'talentos' => ['guardaespaldas', 'incursor', 'mercenario']
                ],
                'Contrabandista' => [
                    'talentos' => ['piloto', 'granuja', 'ladrón']
                ],
                'Técnico' => [
                    'talentos' => ['mecanico', 'clandestino', 'informatico']
                ]
            ];
    
            $viewData = [];
            $viewData["profesiones"] = $profesiones;
            return view('formularios.formularioClases')->with('viewData', $viewData);
    }

    public function FormularioClasesEnviar(Request $Request){
            $profesion = $Request->input('profesiones');
            $talento = $Request->input('talentos');
            echo '<script>';
            echo 'alert('.$profesion.');';
            echo 'alert('.$talento.');';
            echo '</script>';
            $formulario_data = $Request->session()->get('formulario_data');
            $formulario_data['personaje']['profesion'] = $profesion;
            $formulario_data['personaje']['talento'] = $talento;
            $Request->session()->put('formulario_data', $formulario_data);
            return view('formularios.FormularioDemografico');
    }

    public function FormularioDemograficoEnviar(Request $Request){
        $genero = $Request->input('genero');
        $edad = $Request->input('edad');
        echo '<script>';
            echo 'alert('.$edad.');';
            echo 'alert('.$genero.');';
            echo '</script>';
        $altura = $Request->input('altura');
        $tipo_cuerpo = $Request->input('tipo_cuerpo');
        $ojos = $Request->input('ojos');
        $caract_extra = $Request->input('caract_extra');
        $formulario_data = $Request->session()->get('formulario_data', []);
        $formulario_data['personaje']['genero'] = $genero;
        $formulario_data['personaje']['edad'] = $edad;
        echo '<script>';
            echo 'alert('.$formulario_data['personaje']['edad'].');';
            echo 'alert('.$formulario_data['personaje']['genero'].');';
            echo '</script>';
        $formulario_data['personaje']['altura'] = $altura;
        $formulario_data['personaje']['tipo_cuerpo'] = $tipo_cuerpo;
        $formulario_data['personaje']['ojos'] = $ojos;
        $formulario_data['personaje']['caract_extra'] = $caract_extra;
        $Request->session()->put('formulario_data', $formulario_data);
        return view('formularios.FormularioMotivacion');
}

    public function FormularioMotivacionEnviar(Request $Request){
        $Request->file("imagen")->extension();
        $imagen = $Request->file("imagen");
        $pic_name = time().'.'.$imagen->extension();
        $path = $imagen->storeAs('public', $pic_name);

        $motivacion1 = $Request->input('motivacion1');
        $motivacion2 = $Request->input('motivacion2');
        $formulario_data = $Request->session()->get('formulario_data', []);
        $formulario_data['personaje']['motivacion1'] = $motivacion1;
        $formulario_data['personaje']['motivacion2'] = $motivacion2;
        $formulario_data['personaje']['img'] = $pic_name;
        $Request->session()->put('formulario_data', $formulario_data);
        if (Auth::check()) {
            $userId = Auth::id();
        }
        echo '<script>';
            echo 'alert('.$formulario_data['personaje']['genero'].');';
            echo '</script>';
        $personaje = new character();
        $personaje->user_id = $userId;
        $personaje->name = $formulario_data['personaje']['nombre'];
        $personaje->species = $formulario_data['personaje']['especie'];
        $personaje->profesion = $formulario_data['personaje']['profesion'];
        $personaje->talent = $formulario_data['personaje']['talento'];
        $personaje->gender = $formulario_data['personaje']['genero'];
        $personaje->age = $formulario_data['personaje']['edad'];
        $personaje->height = $formulario_data['personaje']['altura'];
        $personaje->body_type = $formulario_data['personaje']['tipo_cuerpo'];
        $personaje->eyes = $formulario_data['personaje']['ojos'];
        $personaje->extra_charact = $formulario_data['personaje']['caract_extra'];
        $personaje->motivation1 = $motivacion1;
        $personaje->motivation2 = $motivacion2;
        $personaje->img = $pic_name;
        $personaje->save();
    return view('formularioPersonaje');
}



    public function mostarPersonaje($id){
        
    }
}