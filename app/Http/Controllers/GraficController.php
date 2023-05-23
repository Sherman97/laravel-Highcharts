<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class GraficController extends Controller
{
    public function index(){

        $data =  Producto::all();

        // dd($data);
        // Lógica para mostrar la vista "grafic"
        return view('livewire.grafic');
    }

    

}
