<?php

namespace App\Http\Livewire\Productos;

use App\Models\Producto;
use Livewire\Component;

class ListaProductos extends Component
{
    public $productos;
    public $selected_id = 0;
    public $state = [];

    public function render()
    {
        $this->update();
        return view('livewire.productos.lista-productos');
    }
    public function abrirModal()
    {
        $this->selected_id = 2;
    }
    public function resetUI()
    {
        $this->state = [];
        $this->selected_id = 0;
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
            'precio_venta'      => $this->state['precio_venta'],
        ]);
        $this->resetUI();
    }
    public function editar(Producto $producto)
    {
        $this->selected_id = $producto->id;
        $this->state = $producto->toArray();
    }
    public function actualizar()
    {
        $producto = Producto::findOrFail($this->state['id']);
        $producto->update([
            'nombre'            => $this->state['nombre'],
            'caracteristicas'   => $this->state['caracteristicas'],
            'precio_venta'      => $this->state['precio_venta'],
        ]);
        $this->resetUI();
    }
}
