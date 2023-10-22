<?php

namespace App\Http\Livewire\welcome;

use Livewire\Component;
use App\Models\CatedralFoto;
use App\Models\Catedral;

use Livewire\WithPagination;


class CatedralFototeca extends Component
{
    use WithPagination;
    public $buscar;
    public $maestro;



    public function render()
    {


        $fotos = CatedralFoto::where('piefoto','LIKE','%'.$this->buscar.'%')
        ->where('catedral_id','<',46)
        ->where('catedral_id','!=',1)
        ->orderby('catedral_id')
        ->paginate(60);
        return view('livewire.welcome.catedral-fototeca',compact('fotos'));
    }
    public function getResultsProperty() {


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




    public function limpiar_page() {
        $this->resetPage();
    }

    public function mount() {
        $array = array(
            [
                "id" => "2",
                "name" => "Fachada del Obradoiro",
                "nameSinAcentos" => "Fachada del Obradoiro",
            ],

            [
                "id" => "3",
                "name" => "Fachada de Azabachería",
                "nameSinAcentos" => "Fachada de Azabacheria",
            ],

            [
                "id" => "4",
                "name" => "Fachada de la Quintana",
                "nameSinAcentos" => "Fachada de la Quintana",
            ],

            [
                "id" => "5",
                "name" => "Fachada de Platerías",
                "nameSinAcentos" => "Fachada de Platerias",
            ],

            [
                "id" => "6",
                "name" => "Iglesia de la Corticela",
                "nameSinAcentos" => "Iglesia de la Corticela",
            ],



            [
                "id" => "7",
                "name" => "Capilla Mayor",
                "nameSinAcentos" => "Capilla Mayor",
            ],



            [
                "id" => "8",
                "name" => "Capilla del Pilar",
                "nameSinAcentos" => "Capilla del Pilar",
            ],



            [
                "id" => "9",
                "name" => "Capilla del Espíritu Santo",
                "nameSinAcentos" => "Capilla del Espiritu Santo",
            ],



            [
                "id" => "10",
                "name" => "Capilla del Cristo de Burgos",
                "nameSinAcentos" => "Capilla del Cristo de Burgos",
            ],



            [
                "id" => "11",
                "name" => "Capilla del Salvador",
                "nameSinAcentos" => "Capilla del Salvador",
            ],



            [
                "id" => "12",
                "name" => "Capilla de Santa Catalina",
                "nameSinAcentos" => "Capilla de Santa Catalina",
            ],



            [
                "id" => "13",
                "name" => "Capilla de San Juan",
                "nameSinAcentos" => "Capilla de San Juan",
            ],



            [
                "id" => "14",
                "name" => "Capilla de San Antonio",
                "nameSinAcentos" => "Capilla de San Antonio",
            ],



            [
                "id" => "15",
                "name" => "Capilla de San Bartolomé o Santa Fe",
                "nameSinAcentos" => "Capilla de San Bartolome o Santa Fe",
            ],



            [
                "id" => "16",
                "name" => "Capilla de Nuestra Señora la Blanca",
                "nameSinAcentos" => "Capilla de Nuestra Señora la Blanca",
            ],



            [
                "id" => "17",
                "name" => "Capilla de San Andrés",
                "nameSinAcentos" => "Capilla de San Andres",
            ],



            [
                "id" => "18",
                "name" => "Capilla de Mondragón",
                "nameSinAcentos" => "Capilla de Mondragon",
            ],



            [
                "id" => "19",
                "name" => "Capilla de la Concepción o de Prima",
                "nameSinAcentos" => "Capilla de la Concepcion o de Prima",
            ],



            [
                "id" => "20",
                "name" => "Capilla de la Comunión",
                "nameSinAcentos" => "Capilla de la Comunion",
            ],



            [
                "id" => "21",
                "name" => "Capilla de la Azucena o San Pedro",
                "nameSinAcentos" => "Capilla de la Azucena o San Pedro",
            ],



            [
                "id" => "22",
                "name" => "Capilla de Alba",
                "nameSinAcentos" => "Capilla de Alba",
            ],



            [
                "id" => "23",
                "name" => "Camarín de Santiago Caballero",
                "nameSinAcentos" => "Camarín de Santiago Caballero",
            ],



            [
                "id" => "24",
                "name" => "Las Naves y el Crucero",
                "nameSinAcentos" => "Las Naves y el Crucero",
            ],



            [
                "id" => "25",
                "name" => "La Sacristía",
                "nameSinAcentos" => "La Sacristia",
            ],



            [
                "id" => "26",
                "name" => "La Puerta Santa",
                "nameSinAcentos" => "La Puerta Santa",
            ],



            [
                "id" => "27",
                "name" => "El Trasaltar",
                "nameSinAcentos" => "El Trasaltar",
            ],



            [
                "id" => "28",
                "name" => "El Órgano de la Catedral",
                "nameSinAcentos" => "El organo de la Catedral",
            ],



            [
                "id" => "29",
                "name" => "El Botafumeiro",
                "nameSinAcentos" => "El Botafumeiro",
            ],



            [
                "id" => "30",
                "name" => "El Baptisterio",
                "nameSinAcentos" => "El Baptisterio",
            ],



            [
                "id" => "31",
                "name" => "Cripta Apostólica",
                "nameSinAcentos" => "Cripta Apostolica",
            ],



            [
                "id" => "32",
                "name" => "Tapices",
                "nameSinAcentos" => "Tapices",
            ],



            [
                "id" => "33",
                "name" => "Pintura",
                "nameSinAcentos" => "Pintura",
            ],



            [
                "id" => "34",
                "name" => "Orfebrería",
                "nameSinAcentos" => "Orfebreria",
            ],



            [
                "id" => "35",
                "name" => "Elementos Arquitectónicos y Escultura",
                "nameSinAcentos" => "Elementos Arquitectónicos y Escultura",
            ],



            [
                "id" => "36",
                "name" => "Artes Textiles",
                "nameSinAcentos" => "Artes Textiles",
            ],



            [
                "id" => "37",
                "name" => "Tribuna y las cubiertas",
                "nameSinAcentos" => "Tribuna y las cubiertas",
            ],



            [
                "id" => "38",
                "name" => "Biblioteca y la Sala Capitular",
                "nameSinAcentos" => "Biblioteca y la Sala Capitular",
            ],



            [
                "id" => "39",
                "name" => "El Claustro",
                "nameSinAcentos" => "El Claustro",
            ],



            [
                "id" => "40",
                "name" => "Excavaciones Arqueológicas",
                "nameSinAcentos" => "Excavaciones Arqueologicas",
            ],



            [
                "id" => "41",
                "name" => "El Palacio de Gelmírez",
                "nameSinAcentos" => "El Palacio de Gelmirez",
            ],



            [
                "id" => "42",
                "name" => "Capilla de las Reliquias",
                "nameSinAcentos" => "Capilla de las Reliquias",
            ],



            [
                "id" => "43",
                "name" => "Capilla de San Fernando",
                "nameSinAcentos" => "Capilla de San Fernando",
            ],



            [
                "id" => "44",
                "name" => "Pórtico de la Gloria",
                "nameSinAcentos" => "Portico de la Gloria",
            ],



            [
                "id" => "45",
                "name" => "Torre del Reloj",
                "nameSinAcentos" => "Torre del Reloj",
            ],



        );

        $this->maestro = $array;

    }


}
