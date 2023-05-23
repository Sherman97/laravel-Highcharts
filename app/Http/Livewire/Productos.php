<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;

class Productos extends Component
{

    public $productos, $descripcion, $cantidad, $id_producto;
    public $modal = false;

    public function render(){
        
        $this->productos = Producto::all();

        return view('livewire.productos');
    }

    public function graficos(){

        return redirect('/graficos');
    }

    public function crear(){

        $this->clear();
        $this->openModal();
    }

    public function openModal(){
        $this->modal = true;
    }

    public function closeModal(){
        $this->modal = false;
    }

    public function clear(){
        $this->description = '';
        $this->cantidad = '';
        $this->id_producto = '';

    }

    public function edit($id){

        $producto = Producto::findOrFail($id);
        $this->id_producto = $id;
        $this->description = $producto->description;
        $this->cantidad = $producto->cantidad;
        $this->openModal();

    }

    public function delete($id){
     
        Producto::find($id)->delete();
        session()->flash('message', 'Registro Eliminado');
    }

    public function guardar(){

        Producto::updateOrCreate(['id'=>$this->id_producto],
        [
            'description'=>$this->description,
            'cantidad'=>$this->cantidad
        ]);

        session()->flash('message',
        $this->id_producto ? '¡Actualización exitosa!' : 'Creado Exitosamente!');

        $this->closeModal();
        $this->clear();
         

    }


}
