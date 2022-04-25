<?php

namespace App\Http\Livewire\Productos;

use App\Models\Producto;
use Livewire\Component;

class ListaProductos extends Component
{
    public $productos;
    public $selected_id = false;
    public $state = [];

    public function render()
    {
        $this->update();
        return view('livewire.productos.lista-productos');
    }
    public function abrirModal($value)
    {
        $this->selected_id = $value;
    }
    public function cancelar($value)
    {
        $this->selected_id = $value;
    }
    public function resetUI()
    {
        $this->state = [];
    }
    public function update()
    {
        $this->productos();
    }
    public function productos()
    {
        $this->productos = Producto::all();
    }
    public function store()
    {
        Producto::create([
            'nombre'            => $this->state['nombre'],
            'caracteristicas'   => $this->state['caracteristicas'],
            'precio_venta'            => $this->state['precio'],
        ]);
        $this->cancelar(false);
        $this->resetUI();
    }
}
