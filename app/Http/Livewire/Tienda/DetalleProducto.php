<?php

namespace App\Http\Livewire\Tienda;

use App\Models\Producto;
use Livewire\Component;

class DetalleProducto extends Component
{
    public $producto;

    public function mount(Producto $producto)
    {
        $this->producto = $producto;
    }
    public function render()
    {
        return view('livewire.tienda.detalle-producto')->extends('layouts.tienda.detalle')->section('content');
    }
}
