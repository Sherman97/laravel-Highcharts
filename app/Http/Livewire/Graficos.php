<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;


class Graficos extends Component
{

    public $modal = false; 


    public function render(){

        $datos =  Producto::all();
        $puntos = [];

        foreach($datos as $data){
            $puntos[] = ['name' => $data['description'], 'y' => $data['cantidad'] ];
        }


        return view('livewire.graficos', ["data" => json_encode($puntos)]);
    }

    public function datos(){

        return redirect('/product');
    }

    public function mapgrafic(){

        $data =  Producto::all();
        dd($data, "data}?");
        

    }



}
