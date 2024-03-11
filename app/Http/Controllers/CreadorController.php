<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreadorController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        return view('creacion-pj.form2')->with("viewData", $viewData);
    }

    public function form1_envio(Request $Request)
    {
        $datos = [];
        $Request->validate([
            "nombre" => "required|max:255"
        ]);
        $nuevo_personaje = array();
        $nombre = $Request->input('nombre');
        $nuevo_personaje["nombre"] = $nombre;
    }

    public function form1(){
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
            $viewData["especies"] = $especies;
            return view('creacion-pj.form1')->with("viewData", $viewData);
    }

    public function form2(Request $Request){
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
            $viewData["especies"] = $especies;
            $viewData["profesiones"] = $profesiones;
            return view('creacion-pj.form2')->with("viewData", $viewData);
    }
    public function crear(Request $request) {
        
    }
}
