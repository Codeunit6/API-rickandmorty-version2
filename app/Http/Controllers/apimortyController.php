<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apimortyController extends Controller
{
    public function inicio(){
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://rickandmortyapi.com/api/character');
        $datos = json_decode($response->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes = [];

        foreach ($datos['results'] as $personaje){
            $personajes[] = [
                'id' =>$personaje['id'],
                'nombre' => $personaje['name'],
                'especie'=> $personaje['species'],
                'origen'=> $personaje['origin']['name'],
                'imagen'=> $personaje['image'],
                'estatus'=> $personaje['status'],
                'genero'=> $personaje['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $response = $url->request('GET','https://rickandmortyapi.com/api/character/?page=2');
        $date = json_decode($response->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes2 = [];

        foreach ($date['results'] as $personaje2){
            $personajes2[] = [
                'id' =>$personaje2['id'],
                'nombre' => $personaje2['name'],
                'especie'=> $personaje2['species'],
                'origen'=> $personaje2['origin']['name'],
                'imagen'=> $personaje2['image'],
                'estatus'=> $personaje2['status'],
                'genero'=> $personaje2['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=3');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes3 = [];

        foreach ($datee['results'] as $personaje3){
            $personajes3[] = [
                'id' =>$personaje3['id'],
                'nombre' => $personaje3['name'],
                'especie'=> $personaje3['species'],
                'origen'=> $personaje3['origin']['name'],
                'imagen'=> $personaje3['image'],
                'estatus'=> $personaje3['status'],
                'genero'=> $personaje3['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=4');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes4 = [];

        foreach ($datee['results'] as $personaje4){
            $personajes4[] = [
                'id' =>$personaje4['id'],
                'nombre' => $personaje4['name'],
                'especie'=> $personaje4['species'],
                'origen'=> $personaje4['origin']['name'],
                'imagen'=> $personaje4['image'],
                'estatus'=> $personaje4['status'],
                'genero'=> $personaje4['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=5');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes5 = [];

        foreach ($datee['results'] as $personaje5){
            $personajes5[] = [
                'id' =>$personaje5['id'],
                'nombre' => $personaje5['name'],
                'especie'=> $personaje5['species'],
                'origen'=> $personaje5['origin']['name'],
                'imagen'=> $personaje5['image'],
                'estatus'=> $personaje5['status'],
                'genero'=> $personaje5['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=6');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes6 = [];

        foreach ($datee['results'] as $personaje6){
            $personajes6[] = [
                'id' =>$personaje6['id'],
                'nombre' => $personaje6['name'],
                'especie'=> $personaje6['species'],
                'origen'=> $personaje6['origin']['name'],
                'imagen'=> $personaje6['image'],
                'estatus'=> $personaje6['status'],
                'genero'=> $personaje6['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=7');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes7 = [];

        foreach ($datee['results'] as $personaje7){
            $personajes7[] = [
                'id' =>$personaje7['id'],
                'nombre' => $personaje7['name'],
                'especie'=> $personaje7['species'],
                'origen'=> $personaje7['origin']['name'],
                'imagen'=> $personaje7['image'],
                'estatus'=> $personaje7['status'],
                'genero'=> $personaje7['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=8');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes8 = [];

        foreach ($datee['results'] as $personaje8){
            $personajes8[] = [
                'id' =>$personaje8['id'],
                'nombre' => $personaje8['name'],
                'especie'=> $personaje8['species'],
                'origen'=> $personaje8['origin']['name'],
                'imagen'=> $personaje8['image'],
                'estatus'=> $personaje8['status'],
                'genero'=> $personaje8['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=9');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes9 = [];

        foreach ($datee['results'] as $personaje9){
            $personajes9[] = [
                'id' =>$personaje9['id'],
                'nombre' => $personaje9['name'],
                'especie'=> $personaje9['species'],
                'origen'=> $personaje9['origin']['name'],
                'imagen'=> $personaje9['image'],
                'estatus'=> $personaje9['status'],
                'genero'=> $personaje9['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=10');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes10 = [];

        foreach ($datee['results'] as $personaje10){
            $personajes10[] = [
                'id' =>$personaje10['id'],
                'nombre' => $personaje10['name'],
                'especie'=> $personaje10['species'],
                'origen'=> $personaje10['origin']['name'],
                'imagen'=> $personaje10['image'],
                'estatus'=> $personaje10['status'],
                'genero'=> $personaje10['gender']
            ];
        }
        return view('inicio', ['personajes'=>$personajes, 'personajes2'=>$personajes2, 'personajes3'=>$personajes3, 'personajes4'=>$personajes4, 'personajes5'=>$personajes5,'personajes6'=>$personajes6,'personajes7'=>$personajes7,'personajes8'=>$personajes8,'personajes9'=>$personajes9,'personajes10'=>$personajes10]);
    }
    
    public function detallePersonaje($id){
        $personajes = new \GuzzleHttp\Client();
        $response = $personajes->request('GET','https://rickandmortyapi.com/api/character/'.$id);
        $personajeseparado = json_decode($response->getBody()->getContents(), true);

        //Generar numero al azar numero de paginas 
        $numero = rand(0,42);
        
        //Recorrer un numero random dentro de la pagina segun la api
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://rickandmortyapi.com/api/character/?page='.$numero);
        $datos = json_decode($response->getBody()->getContents(), true);
        $personajes = [];

         foreach ($datos['results'] as $personaje) {
             $personajes[] = [
                 'id' => $personaje['id'],
                 'nombre' => $personaje['name'],
                 'especie' => $personaje['species'],
                 'origen' => $personaje['origin']['name'],
                 'imagen' => $personaje['image'],
                 'estatus' => $personaje['status'],
                 'genero' => $personaje['gender']
             ];
         }        
        //Recorrer el arreglo
        return view ('detalle',['personaje'=>$personajeseparado, 'personajes'=>$personajes]);
    }
    //PANTALLA 2
    public function inicio2(){
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://rickandmortyapi.com/api/character/?page=11');
        $datos = json_decode($response->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes = [];

        foreach ($datos['results'] as $personaje){
            $personajes[] = [
                'id' =>$personaje['id'],
                'nombre' => $personaje['name'],
                'especie'=> $personaje['species'],
                'origen'=> $personaje['origin']['name'],
                'imagen'=> $personaje['image'],
                'estatus'=> $personaje['status'],
                'genero'=> $personaje['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $response = $url->request('GET','https://rickandmortyapi.com/api/character/?page=12');
        $date = json_decode($response->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes2 = [];

        foreach ($date['results'] as $personaje2){
            $personajes2[] = [
                'id' =>$personaje2['id'],
                'nombre' => $personaje2['name'],
                'especie'=> $personaje2['species'],
                'origen'=> $personaje2['origin']['name'],
                'imagen'=> $personaje2['image'],
                'estatus'=> $personaje2['status'],
                'genero'=> $personaje2['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=13');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes3 = [];

        foreach ($datee['results'] as $personaje3){
            $personajes3[] = [
                'id' =>$personaje3['id'],
                'nombre' => $personaje3['name'],
                'especie'=> $personaje3['species'],
                'origen'=> $personaje3['origin']['name'],
                'imagen'=> $personaje3['image'],
                'estatus'=> $personaje3['status'],
                'genero'=> $personaje3['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=14');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes4 = [];

        foreach ($datee['results'] as $personaje4){
            $personajes4[] = [
                'id' =>$personaje4['id'],
                'nombre' => $personaje4['name'],
                'especie'=> $personaje4['species'],
                'origen'=> $personaje4['origin']['name'],
                'imagen'=> $personaje4['image'],
                'estatus'=> $personaje4['status'],
                'genero'=> $personaje4['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=15');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes5 = [];

        foreach ($datee['results'] as $personaje5){
            $personajes5[] = [
                'id' =>$personaje5['id'],
                'nombre' => $personaje5['name'],
                'especie'=> $personaje5['species'],
                'origen'=> $personaje5['origin']['name'],
                'imagen'=> $personaje5['image'],
                'estatus'=> $personaje5['status'],
                'genero'=> $personaje5['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=16');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes6 = [];

        foreach ($datee['results'] as $personaje6){
            $personajes6[] = [
                'id' =>$personaje6['id'],
                'nombre' => $personaje6['name'],
                'especie'=> $personaje6['species'],
                'origen'=> $personaje6['origin']['name'],
                'imagen'=> $personaje6['image'],
                'estatus'=> $personaje6['status'],
                'genero'=> $personaje6['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=17');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes7 = [];

        foreach ($datee['results'] as $personaje7){
            $personajes7[] = [
                'id' =>$personaje7['id'],
                'nombre' => $personaje7['name'],
                'especie'=> $personaje7['species'],
                'origen'=> $personaje7['origin']['name'],
                'imagen'=> $personaje7['image'],
                'estatus'=> $personaje7['status'],
                'genero'=> $personaje7['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=18');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes8 = [];

        foreach ($datee['results'] as $personaje8){
            $personajes8[] = [
                'id' =>$personaje8['id'],
                'nombre' => $personaje8['name'],
                'especie'=> $personaje8['species'],
                'origen'=> $personaje8['origin']['name'],
                'imagen'=> $personaje8['image'],
                'estatus'=> $personaje8['status'],
                'genero'=> $personaje8['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=19');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes9 = [];

        foreach ($datee['results'] as $personaje9){
            $personajes9[] = [
                'id' =>$personaje9['id'],
                'nombre' => $personaje9['name'],
                'especie'=> $personaje9['species'],
                'origen'=> $personaje9['origin']['name'],
                'imagen'=> $personaje9['image'],
                'estatus'=> $personaje9['status'],
                'genero'=> $personaje9['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=20');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes10 = [];

        foreach ($datee['results'] as $personaje10){
            $personajes10[] = [
                'id' =>$personaje10['id'],
                'nombre' => $personaje10['name'],
                'especie'=> $personaje10['species'],
                'origen'=> $personaje10['origin']['name'],
                'imagen'=> $personaje10['image'],
                'estatus'=> $personaje10['status'],
                'genero'=> $personaje10['gender']
            ];
        }
        return view('inicio2', ['personajes'=>$personajes, 'personajes2'=>$personajes2, 'personajes3'=>$personajes3, 'personajes4'=>$personajes4, 'personajes5'=>$personajes5,'personajes6'=>$personajes6,'personajes7'=>$personajes7,'personajes8'=>$personajes8,'personajes9'=>$personajes9,'personajes10'=>$personajes10]);
    }
    //PANTALLA 3 
    public function inicio3(){
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://rickandmortyapi.com/api/character/?page=21');
        $datos = json_decode($response->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes = [];

        foreach ($datos['results'] as $personaje){
            $personajes[] = [
                'id' =>$personaje['id'],
                'nombre' => $personaje['name'],
                'especie'=> $personaje['species'],
                'origen'=> $personaje['origin']['name'],
                'imagen'=> $personaje['image'],
                'estatus'=> $personaje['status'],
                'genero'=> $personaje['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $response = $url->request('GET','https://rickandmortyapi.com/api/character/?page=22');
        $date = json_decode($response->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes2 = [];

        foreach ($date['results'] as $personaje2){
            $personajes2[] = [
                'id' =>$personaje2['id'],
                'nombre' => $personaje2['name'],
                'especie'=> $personaje2['species'],
                'origen'=> $personaje2['origin']['name'],
                'imagen'=> $personaje2['image'],
                'estatus'=> $personaje2['status'],
                'genero'=> $personaje2['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=23');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes3 = [];

        foreach ($datee['results'] as $personaje3){
            $personajes3[] = [
                'id' =>$personaje3['id'],
                'nombre' => $personaje3['name'],
                'especie'=> $personaje3['species'],
                'origen'=> $personaje3['origin']['name'],
                'imagen'=> $personaje3['image'],
                'estatus'=> $personaje3['status'],
                'genero'=> $personaje3['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=24');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes4 = [];

        foreach ($datee['results'] as $personaje4){
            $personajes4[] = [
                'id' =>$personaje4['id'],
                'nombre' => $personaje4['name'],
                'especie'=> $personaje4['species'],
                'origen'=> $personaje4['origin']['name'],
                'imagen'=> $personaje4['image'],
                'estatus'=> $personaje4['status'],
                'genero'=> $personaje4['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=25');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes5 = [];

        foreach ($datee['results'] as $personaje5){
            $personajes5[] = [
                'id' =>$personaje5['id'],
                'nombre' => $personaje5['name'],
                'especie'=> $personaje5['species'],
                'origen'=> $personaje5['origin']['name'],
                'imagen'=> $personaje5['image'],
                'estatus'=> $personaje5['status'],
                'genero'=> $personaje5['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=26');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes6 = [];

        foreach ($datee['results'] as $personaje6){
            $personajes6[] = [
                'id' =>$personaje6['id'],
                'nombre' => $personaje6['name'],
                'especie'=> $personaje6['species'],
                'origen'=> $personaje6['origin']['name'],
                'imagen'=> $personaje6['image'],
                'estatus'=> $personaje6['status'],
                'genero'=> $personaje6['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=27');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes7 = [];

        foreach ($datee['results'] as $personaje7){
            $personajes7[] = [
                'id' =>$personaje7['id'],
                'nombre' => $personaje7['name'],
                'especie'=> $personaje7['species'],
                'origen'=> $personaje7['origin']['name'],
                'imagen'=> $personaje7['image'],
                'estatus'=> $personaje7['status'],
                'genero'=> $personaje7['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=28');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes8 = [];

        foreach ($datee['results'] as $personaje8){
            $personajes8[] = [
                'id' =>$personaje8['id'],
                'nombre' => $personaje8['name'],
                'especie'=> $personaje8['species'],
                'origen'=> $personaje8['origin']['name'],
                'imagen'=> $personaje8['image'],
                'estatus'=> $personaje8['status'],
                'genero'=> $personaje8['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=29');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes9 = [];

        foreach ($datee['results'] as $personaje9){
            $personajes9[] = [
                'id' =>$personaje9['id'],
                'nombre' => $personaje9['name'],
                'especie'=> $personaje9['species'],
                'origen'=> $personaje9['origin']['name'],
                'imagen'=> $personaje9['image'],
                'estatus'=> $personaje9['status'],
                'genero'=> $personaje9['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=30');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes10 = [];

        foreach ($datee['results'] as $personaje10){
            $personajes10[] = [
                'id' =>$personaje10['id'],
                'nombre' => $personaje10['name'],
                'especie'=> $personaje10['species'],
                'origen'=> $personaje10['origin']['name'],
                'imagen'=> $personaje10['image'],
                'estatus'=> $personaje10['status'],
                'genero'=> $personaje10['gender']
            ];
        }
        return view('inicio3', ['personajes'=>$personajes, 'personajes2'=>$personajes2, 'personajes3'=>$personajes3, 'personajes4'=>$personajes4, 'personajes5'=>$personajes5,'personajes6'=>$personajes6,'personajes7'=>$personajes7,'personajes8'=>$personajes8,'personajes9'=>$personajes9,'personajes10'=>$personajes10]);
    }
    //PANTALLA 4
    public function inicio4(){
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://rickandmortyapi.com/api/character/?page=31');
        $datos = json_decode($response->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes = [];

        foreach ($datos['results'] as $personaje){
            $personajes[] = [
                'id' =>$personaje['id'],
                'nombre' => $personaje['name'],
                'especie'=> $personaje['species'],
                'origen'=> $personaje['origin']['name'],
                'imagen'=> $personaje['image'],
                'estatus'=> $personaje['status'],
                'genero'=> $personaje['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $response = $url->request('GET','https://rickandmortyapi.com/api/character/?page=32');
        $date = json_decode($response->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes2 = [];

        foreach ($date['results'] as $personaje2){
            $personajes2[] = [
                'id' =>$personaje2['id'],
                'nombre' => $personaje2['name'],
                'especie'=> $personaje2['species'],
                'origen'=> $personaje2['origin']['name'],
                'imagen'=> $personaje2['image'],
                'estatus'=> $personaje2['status'],
                'genero'=> $personaje2['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=33');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes3 = [];

        foreach ($datee['results'] as $personaje3){
            $personajes3[] = [
                'id' =>$personaje3['id'],
                'nombre' => $personaje3['name'],
                'especie'=> $personaje3['species'],
                'origen'=> $personaje3['origin']['name'],
                'imagen'=> $personaje3['image'],
                'estatus'=> $personaje3['status'],
                'genero'=> $personaje3['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=34');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes4 = [];

        foreach ($datee['results'] as $personaje4){
            $personajes4[] = [
                'id' =>$personaje4['id'],
                'nombre' => $personaje4['name'],
                'especie'=> $personaje4['species'],
                'origen'=> $personaje4['origin']['name'],
                'imagen'=> $personaje4['image'],
                'estatus'=> $personaje4['status'],
                'genero'=> $personaje4['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=35');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes5 = [];

        foreach ($datee['results'] as $personaje5){
            $personajes5[] = [
                'id' =>$personaje5['id'],
                'nombre' => $personaje5['name'],
                'especie'=> $personaje5['species'],
                'origen'=> $personaje5['origin']['name'],
                'imagen'=> $personaje5['image'],
                'estatus'=> $personaje5['status'],
                'genero'=> $personaje5['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=36');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes6 = [];

        foreach ($datee['results'] as $personaje6){
            $personajes6[] = [
                'id' =>$personaje6['id'],
                'nombre' => $personaje6['name'],
                'especie'=> $personaje6['species'],
                'origen'=> $personaje6['origin']['name'],
                'imagen'=> $personaje6['image'],
                'estatus'=> $personaje6['status'],
                'genero'=> $personaje6['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=37');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes7 = [];

        foreach ($datee['results'] as $personaje7){
            $personajes7[] = [
                'id' =>$personaje7['id'],
                'nombre' => $personaje7['name'],
                'especie'=> $personaje7['species'],
                'origen'=> $personaje7['origin']['name'],
                'imagen'=> $personaje7['image'],
                'estatus'=> $personaje7['status'],
                'genero'=> $personaje7['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=38');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes8 = [];

        foreach ($datee['results'] as $personaje8){
            $personajes8[] = [
                'id' =>$personaje8['id'],
                'nombre' => $personaje8['name'],
                'especie'=> $personaje8['species'],
                'origen'=> $personaje8['origin']['name'],
                'imagen'=> $personaje8['image'],
                'estatus'=> $personaje8['status'],
                'genero'=> $personaje8['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=39');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes9 = [];

        foreach ($datee['results'] as $personaje9){
            $personajes9[] = [
                'id' =>$personaje9['id'],
                'nombre' => $personaje9['name'],
                'especie'=> $personaje9['species'],
                'origen'=> $personaje9['origin']['name'],
                'imagen'=> $personaje9['image'],
                'estatus'=> $personaje9['status'],
                'genero'=> $personaje9['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/?page=40');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes10 = [];

        foreach ($datee['results'] as $personaje10){
            $personajes10[] = [
                'id' =>$personaje10['id'],
                'nombre' => $personaje10['name'],
                'especie'=> $personaje10['species'],
                'origen'=> $personaje10['origin']['name'],
                'imagen'=> $personaje10['image'],
                'estatus'=> $personaje10['status'],
                'genero'=> $personaje10['gender']
            ];
        }
        return view('inicio4', ['personajes'=>$personajes, 'personajes2'=>$personajes2, 'personajes3'=>$personajes3, 'personajes4'=>$personajes4, 'personajes5'=>$personajes5,'personajes6'=>$personajes6,'personajes7'=>$personajes7,'personajes8'=>$personajes8,'personajes9'=>$personajes9,'personajes10'=>$personajes10]);
    }
    //PANTALLA 5
    public function inicio5(){
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://rickandmortyapi.com/api/character/?page=41');
        $datos = json_decode($response->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes = [];

        foreach ($datos['results'] as $personaje){
            $personajes[] = [
                'id' =>$personaje['id'],
                'nombre' => $personaje['name'],
                'especie'=> $personaje['species'],
                'origen'=> $personaje['origin']['name'],
                'imagen'=> $personaje['image'],
                'estatus'=> $personaje['status'],
                'genero'=> $personaje['gender']
            ];
        }
        $url = new \GuzzleHttp\Client();
        $response = $url->request('GET','https://rickandmortyapi.com/api/character/?page=42');
        $date = json_decode($response->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $personajes2 = [];

        foreach ($date['results'] as $personaje2){
            $personajes2[] = [
                'id' =>$personaje2['id'],
                'nombre' => $personaje2['name'],
                'especie'=> $personaje2['species'],
                'origen'=> $personaje2['origin']['name'],
                'imagen'=> $personaje2['image'],
                'estatus'=> $personaje2['status'],
                'genero'=> $personaje2['gender']
            ];
        }
        return view('inicio5', ['personajes'=>$personajes, 'personajes2'=>$personajes2]);
    }
}
