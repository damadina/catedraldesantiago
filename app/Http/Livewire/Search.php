<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Catedral;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class Search extends Component
{
    public $buscar;
    public $maestro;
    public $count = 0;



    public function render()
    {
        return view('livewire.search');
    }

    public function clickBuscar(){
        $this->reset(['buscar']);
    }


    public function getResultsProperty() {

        $this->count = $this->count +1;
        $resultado = array();
        $busco = $this->quitar_acentos($this->buscar);
        foreach($this->maestro as $each){
                if(strripos($each['nameSinAcentos'],$busco) !== false) {
                    array_push($resultado, $each);
                }

        }

        $resultadoFinal=array();
        $index =0;
        foreach($resultado as $each) {
            array_push($resultadoFinal, $each);
            $index = $index + 1;
            /* if($index == 8) {
                break;
            } */
        }

        return $resultadoFinal;

    }

    function quitar_acentos($cadena){
        $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿ';
        $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyyby';
        $cadena = utf8_decode($cadena);
        $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
        return utf8_encode($cadena);
    }

    public function mount() {
        $array = array(
            /* Exterior */
            ['slug' => 'exterior',
            'name' => 'Exterior de la Catedral',
            "nameSinAcentos" => 'Exterior de la Catedral ',
            ],
             /* Interior */
            ['slug' => 'interior',
            'name' => 'Interior de la Catedral',
            "nameSinAcentos" => 'Interior de la Catedral ',
            ],
            /* Capillas */
            ['slug' => 'capillas',
            'name' => 'Capillas de la Catedral',
            "nameSinAcentos" => 'Capillas de la Catedral ',
            ],
             /* Museo */
             ['slug' => 'museo',
             'name' => 'Museo de la Catedral',
             "nameSinAcentos" => 'Museo de la Catedral ',
             ],









            /* Portico de la Gloria */
            ['slug' => 'portico-de-la-gloria',
            'name' => 'El Pórtico de la Gloria',
            "nameSinAcentos" => 'Portico de la Gloria Maestro Mateo ',
            ],
            /* Portico de la Gloria: Timpano */
            ['slug' => 'portico-de-la-gloria#El_Timpano',
            'name' => 'El Tímpano de Pórtico de la Gloria',
            "nameSinAcentos" => 'El Timpano del Portico de la Gloria',
            ],
            /* Portico de la Gloria: Parteluz */
            ['slug' => 'portico-de-la-gloria#El_Parteluz_',
            'name' => 'El Parteluz del Pórtico de la Gloria.',
            "nameSinAcentos" => 'El Parteluz del Portico de la Gloria',
            ],
            /* Portico de la Gloria: Arcos Laterales */
            ['slug' => 'portico-de-la-gloria#Los_Arcos_Laterales',
            'name' => 'Los Arcos Laterales del Pórtico de la Gloria.',
            "nameSinAcentos" => 'Los Arcos Laterales del Portico de la Gloria.',
            ],
            /* Portico de la Gloria: La Cripta */
            ['slug' => 'portico-de-la-gloria#La_Cripta_',
            'name' => 'La Cripta del Pórtico de la Gloria.',
            "nameSinAcentos" => 'La Cripta del Portico de la Gloria.',
            ],
            /* Portico de la Gloria: La Tribuna */
            ['slug' => 'portico-de-la-gloria#La_Tribuna',
            'name' => 'La Tribuna del Pórtico de la Gloria.',
            "nameSinAcentos" => 'La Tribuna del Portico de la Gloria.',
            ],
                /* Portico de la Gloria: El Mensaje */
            ['slug' => 'portico-de-la-gloria#El_mensaje',
            'name' => 'El mensaje del Pórtico de la Gloria de la Gloria.',
            "nameSinAcentos" => 'El mensaje del Portico de la Gloria de la Gloria.',
            ],
                /* Portico de la Gloria: Los instrumentos */
            ['slug' => 'portico-de-la-gloria#Los_instrumentos',
            'name' => 'Los instrumentos del Pórtico de la Gloria.',
            "nameSinAcentos" => 'Los instrumentos del Portico de la Gloria',
            ],
            /* Fachada del Obradoiro*/
            ['slug' => 'fachada-del-obradoiro',
            'name' => 'La Fachada del Obradoiro)',
            "nameSinAcentos" => 'La Fachada del Obradoiro torre carraca torre de las campanas',
            ],
            /* Fachada del Obradoiro: Fachada medieval o maetana */
            ['slug' => 'fachada-del-obradoiro#La_Fachada_Medieval_o_Maetana_',
            'name' => 'La Fachada Medieval o Maetana (anterior a la actual fachada del Obradoiro)',
            "nameSinAcentos" => 'La Fachada Medieval o Maetana (anterior a la actual fachada del Obradoiro)',
            ],
            /* Fachada del Obradoiro:Construcción */
            ['slug' => 'fachada-del-obradoiro#Construccion_de_la_Fachada_del_Obradoiro.',
            'name' => 'Construcción de la actual Fachada del Obradoiro',
            "nameSinAcentos" => 'Construccion de la actual Fachada del Obradoiro',
            ],
                /* Fachada del Obradoiro:Torre de las Campanas */
            ['slug' => 'fachada-del-obradoiro#La_Torre_de_las_Campanas',
            'name' => 'La Torre de las Campanas',
            "nameSinAcentos" => 'Torre de las Campanas torres',
            ],
                /* Fachada del Obradoiro:Torre de la Carraca */
            ['slug' => 'fachada-del-obradoiro#La_Torre_de_la_Carraca',
            'name' => 'La Torre de la Carraca',
            "nameSinAcentos" => 'La Torre de la Carraca',
            ],

            /* Fachada de Azabacheria */
            ['slug' => 'fachada-de-azabacheria',
            'name' => 'Fachada de Azabachería',
            "nameSinAcentos" => 'Fachada de Azabachería',
            ],
            [
            "slug" => "fachada-de-la-quintana",
            "name" => "Fachada de la Quintana",
            "nameSinAcentos" => "Fachada de la Quintana",
            ],

            [
            "slug" => "torre-del-reloj",
            "name" => "Torre del Reloj (de la Berenguela)",
            "nameSinAcentos" => "Torre del Reloj torres torre de la berenguela",
            ],

            [
            "slug" => "fachada-de-platerias",
            "name" => "Fachada de Platerías",
            "nameSinAcentos" => "Fachada de Platerias",
            ],

            [
            "slug" => "iglesia-de-la-corticela",
            "name" => "Iglesia de la Corticela",
            "nameSinAcentos" => "Iglesia de la Corticela",
            ],

            [
            "slug" => "capilla-mayor",
            "name" => "Capilla Mayor",
            "nameSinAcentos" => "Capilla Mayor",
            ],

            [
            "slug" => "capilla-de-san-fernando",
            "name" => "Capilla de San Fernando",
            "nameSinAcentos" => "Capilla de San Fernando",
            ],

            [
            "slug" => "capilla-de-las-reliquias",
            "name" => "Capilla de las Reliquias",
            "nameSinAcentos" => "Capilla de las Reliquias",
            ],

            [
            "slug" => "capilla-del-pilar",
            "name" => "Capilla del Pilar",
            "nameSinAcentos" => "Capilla del Pilar",
            ],

            [
            "slug" => "capilla-del-cristo-de-burgos",
            "name" => "Capilla del Cristo de Burgos",
            "nameSinAcentos" => "Capilla del Cristo de Burgos",
            ],

            [
            "slug" => "capilla-del-espiritu-santo",
            "name" => "Capilla del Espíritu Santo",
            "nameSinAcentos" => "Capilla del Espiritu Santo",
            ],

            [
            "slug" => "capilla-del-salvador",
            "name" => "Capilla del Salvador",
            "nameSinAcentos" => "Capilla del Salvador",
            ],

            [
            "slug" => "capilla-de-santa-catalina",
            "name" => "Capilla de Santa Catalina",
            "nameSinAcentos" => "Capilla de Santa Catalina",
            ],

            [
            "slug" => "capilla-de-san-juan",
            "name" => "Capilla de San Juan",
            "nameSinAcentos" => "Capilla de San Juan",
            ],

            [
            "slug" => "capilla-de-san-antonio",
            "name" => "Capilla de San Antonio",
            "nameSinAcentos" => "Capilla de San Antonio",
            ],

            [
            "slug" => "capilla-de-san-bartolome-o-santa-fe",
            "name" => "Capilla de San Bartolomé o Santa Fe",
            "nameSinAcentos" => "Capilla de San Bartolome o Santa Fe",
            ],

            [
            "slug" => "capilla-de-nuestra-senora-la-blanca",
            "name" => "Capilla de Nuestra Señora la Blanca",
            "nameSinAcentos" => "Capilla de Nuestra Senora la Blanca",
            ],

            [
            "slug" => "capilla-de-san-andres",
            "name" => "Capilla de San Andrés",
            "nameSinAcentos" => "Capilla de San Andres",
            ],

            [
            "slug" => "capilla-de-mondragon",
            "name" => "Capilla de Mondragón",
            "nameSinAcentos" => "Capilla de Mondragon",
            ],

            [
            "slug" => "capilla-de-la-concepcion-o-de-prima",
            "name" => "Capilla de la Concepción o de Prima",
            "nameSinAcentos" => "Capilla de la Concepcion o de Prima",
            ],

            [
            "slug" => "capilla-de-la-comunion",
            "name" => "Capilla de la Comunión",
            "nameSinAcentos" => "Capilla de la Comunion",
            ],

            [
            "slug" => "capilla-de-la-azucena-o-san-pedro",
            "name" => "Capilla de la Azucena o San Pedro",
            "nameSinAcentos" => "Capilla de la Azucena o San Pedro",
            ],

            [
            "slug" => "capilla-de-alba",
            "name" => "Capilla de Alba",
            "nameSinAcentos" => "Capilla de Alba",
            ],

            [
            "slug" => "camarin-de-santiago-caballero",
            "name" => "Camarín de Santiago Caballero",
            "nameSinAcentos" => "Camarin de Santiago Caballero",
            ],

            [
            "slug" => "portico-de-la-gloria",
            "name" => "Pórtico de la Gloria",
            "nameSinAcentos" => "Portico de la Gloria",
            ],

            [
            "slug" => "las-naves-y-el-crucero",
            "name" => "Las Naves y el Crucero",
            "nameSinAcentos" => "Las Naves y el Crucero",
            ],

            [
            "slug" => "la-sacristia",
            "name" => "La Sacristía",
            "nameSinAcentos" => "La Sacristia",
            ],

            [
            "slug" => "biblioteca-y-la-sala-capitular",
            "name" => "Biblioteca y la Sala Capitular",
            "nameSinAcentos" => "Biblioteca y la Sala Capitular",
            ],

            [
            "slug" => "el-palacio-de-gelmirez",
            "name" => "El Palacio de Gelmírez",
            "nameSinAcentos" => "El Palacio de Gelmirez",
            ],

            [
            "slug" => "la-puerta-santa",
            "name" => "La Puerta Santa",
            "nameSinAcentos" => "La Puerta Santa",
            ],

            [
            "slug" => "el-claustro",
            "name" => "El Claustro",
            "nameSinAcentos" => "El Claustro",
            ],

            [
            "slug" => "el-trasaltar",
            "name" => "El Trasaltar",
            "nameSinAcentos" => "El Trasaltar",
            ],

            [
            "slug" => "tribuna-y-las-cubiertas",
            "name" => "Tribuna y las cubiertas",
            "nameSinAcentos" => "Tribuna y las cubiertas",
            ],

            [
            "slug" => "el-organo-de-la-catedral",
            "name" => "El Órgano de la Catedral",
            "nameSinAcentos" => "El organo de la Catedral",
            ],

            [
            "slug" => "el-botafumeiro",
            "name" => "El Botafumeiro",
            "nameSinAcentos" => "El Botafumeiro",
            ],

            [
            "slug" => "el-baptisterio",
            "name" => "El Baptisterio",
            "nameSinAcentos" => "El Baptisterio",
            ],

            [
            "slug" => "cripta-apostolica",
            "name" => "Cripta Apostólica",
            "nameSinAcentos" => "Cripta Apostolica",
            ],

            [
            "slug" => "excavaciones-arqueologicas",
            "name" => "Excavaciones Arqueológicas",
            "nameSinAcentos" => "Excavaciones Arqueologicas",
            ],

            [
            "slug" => "tapices",
            "name" => "Tapices",
            "nameSinAcentos" => "Tapices",
            ],

            [
            "slug" => "pintura",
            "name" => "Pintura",
            "nameSinAcentos" => "Pintura",
            ],

            [
            "slug" => "orfebreria",
            "name" => "Orfebrería",
            "nameSinAcentos" => "Orfebreria",
            ],

            [
            "slug" => "elementos-arquitectonicos-y-escultura",
            "name" => "Elementos Arquitectónicos y Escultura",
            "nameSinAcentos" => "Elementos Arquitectonicos y Escultura",
            ],

            [
            "slug" => "artes-textiles",
            "name" => "Artes Textiles",
            "nameSinAcentos" => "Artes Textiles",
            ],

            /* Home */
            ['slug' => '#El_Apostol_Santiago_y_la_Catedral_de_Santiago',
            'name' => 'El Apóstol Santiago y la Catedral de Santiago',
            "nameSinAcentos" => 'El Apostol Santiago y la Catedral de Santiago Barca de Piedra Atanasio Teodoro Reina Lupa Libredon Solovio Pelagio Atia Moeta San Salvador de Antealtares '
            ],
            ['slug' => '#Construccion_de_las_primeras_iglesias',
            'name' => 'Construcción de la primeras iglesias',
            "nameSinAcentos" => 'Construccion de la primeras iglesias Alfonso II Alfonso III El Grande consagración Almanzor San Pedro de Mezonzo y el rey Bermudo II '
            ],

            ['slug' => '#Construccion_de_la_Catedral',
            'name' => 'Construcción de la Catedral de Santiago',
            "nameSinAcentos" =>'Construccion de la Catedral de Santiago Maestro Bernardo el viejo Diego Gelmírez Bernardo el Joven fin de las obras Maestro Mateo Gudesteo Catedral vieja consagración torres de la Trinidad y la Berenguela  ',
            ],
            ['slug' => '#Transformaciones_en_el_exterior_de_la_Catedral',
            'name' => 'Transformaciones en el exterior de la Catedral a lo largo del tiempo',
                "nameSinAcentos" => 'Transformaciones en el exterior de la Catedral a lo largo del tiempo'
            ],
            ['slug' => '#Transformaciones_en_el_interior_de_la_Catedral',
            'name' => 'Transformaciones en el interior de la Catedral a lo largo del tiempo',
            "nameSinAcentos" => 'Transformaciones en el interior de la Catedral a lo largo del tiempo',
            ],
            ['slug' => '#MMuseo_de_la_Catedral_',
            'name' => 'Museo de la Catedral de Santiago',
            "nameSinAcentos" => 'Museo de la Catedral de Santiago',
            ],
            ['slug' => '#Origenes_del_camino_a_Santiago',
            'name' => 'Orígenes del camino a Santiago',
            "nameSinAcentos" => 'Origenes del camino a Santiago',
            ],
            ['slug' => '#Las_peregrinaciones_a_la_Catedral_de_Santiago',
            'name' => 'Las peregrinaciones a la Catedral de Santiago',
            "nameSinAcentos" => 'Las peregrinaciones a la Catedral de Santiago',
            ],
            ['slug' => '#El_Codice_Calixtino',
            'name' => 'El Códice Calixtino',
            "nameSinAcentos" =>  'El Codice Calixtino',
            ],
            ['slug' => '#El_Tumbo_A',
            'name' => 'El Tumbo A',
            "nameSinAcentos" =>  'El Tumbo A'
            ],
            ['slug' => '#El_Tumbo_B',
            'name' => 'El Tumbo B',
            "nameSinAcentos" => 'El Tumbo B',
            ],
            ['slug' => '#Breviario_de_Miranda',
            'name' => 'Breviario de Miranda',
            "nameSinAcentos" =>  'Breviario de Miranda',
            ],

            /* Horarios */
            ['slug' => 'horarios',
            'name' => 'Horarios de acceso a la Catedral',
            "nameSinAcentos" => 'Horarios de visita a la Catedral acceso apertura cierre Oficina de Acogida al Peregrino ',
            ],
            /* Misas en la Catedral */
            ['slug' => 'misasCatedral',
            'name' => 'Misas en la Catedral',
            "nameSinAcentos" => 'misas en la Catedral Adoración al Santísimo Confesiones',
            ],
            /* Misas en Santiago */
            ['slug' => 'misasSantiago',
            'name' => 'Misas en Santiago de Compostela',
            "nameSinAcentos" => 'misas en Santiago',
            ],
            /* Calendario liturgico */
            ['slug' => 'calendarioLiturgico',
            'name' => 'Calendario Litúrgico',
            "nameSinAcentos" => 'Calendario Litúrgico',
            ],
            /* Entradas para visitar la Catedral */
            ['slug' => 'entradasVisitas',
            'name' => 'Entradas para visitar la Catedral',
            "nameSinAcentos" => 'Entradas para visitar la Catedral',
            ],
            /* Funcionamiento del Botafumeiro */
            ['slug' => 'funcionamientoBotafumeiro',
            'name' => 'Funcionamiento del botafumeiro',
            "nameSinAcentos" => 'Calendario funcionamiento del botafumeiro',
            ],



        );

        $this->maestro = $array;

    }



}

