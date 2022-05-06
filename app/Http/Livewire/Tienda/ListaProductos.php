<?php

namespace App\Http\Livewire\Tienda;

use App\Models\Producto;
use Livewire\Component;

class ListaProductos extends Component
{
    public $productos;
    public $product;

    public function render()
    {
        $this->update();
        return view('livewire.tienda.lista-productos');
    }
    public function update()
    {
        $this->productos();
    }
    public function productos()
    {
        $this->productos  = Producto::all();
    }
}
