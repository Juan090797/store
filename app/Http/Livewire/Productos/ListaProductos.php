<?php

namespace App\Http\Livewire\Productos;

use App\Models\Producto;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class ListaProductos extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $productos,$nombreArchivo,$imagen;
    public $selected_id;
    public $state = [];

    public function render()
    {
        $this->update();
        return view('livewire.productos.lista-productos')->extends('layouts.tema.app')->section('content');
    }
    public function resetUI()
    {
        $this->state = [];
        $this->selected_id = 0;
        $this->imagen = '';
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
        $validated = Validator::make($this->state, [
            'nombre'            => 'required|min:3',
            'precio_venta'      => 'required',
            'caracteristicas'   => 'required',
            'estado'            => 'required',
        ],[
            'nombre.required'           => 'Nombre del producto es requerido',
            'nombre.min'                => 'El nombre del producto debe tener al menos 3 caracteres',
            'estado.required'           => 'El estado es requerido',
            'caracteristicas.required'  => 'Las caracteristicas son requeridas',
            'precio_venta.required'     => 'El precio es requerido',
        ])->validate();
        if($this->imagen)
        {
            $this->nombreArchivo = $this->imagen->getClientOriginalName();
            $this->imagen->storeAs('productos', $this->nombreArchivo);
        }else{
            $this->nombreArchivo = 'foto_producto.png';
        }
        Producto::create([
            'nombre'            => $this->state['nombre'],
            'estado'            => $this->state['estado'],
            'caracteristicas'   => $this->state['caracteristicas'],
            'precio_venta'      => $this->state['precio_venta'],
            'imagen'            => $this->nombreArchivo,
        ]);
        $this->emit('hide-modal');
        $this->resetUI();
        $this->alert('success', 'Producto creado!!',['timerProgressBar' => true]);
    }
    public function editar(Producto $producto)
    {
        $this->selected_id = $producto->id;
        $this->state = $producto->toArray();
        $this->emit('show-modal');
    }
    public function actualizar()
    {
        $validated = Validator::make($this->state, [
            'nombre'            => 'required|min:3',
            'precio_venta'      => 'required',
            'caracteristicas'   => 'required',
            'estado'            => 'required',
        ],[
            'nombre.required'           => 'Nombre del producto es requerido',
            'nombre.min'                => 'El nombre del producto debe tener al menos 3 caracteres',
            'estado.required'           => 'El estado es requerido',
            'caracteristicas.required'  => 'Las caracteristicas son requeridas',
            'precio_venta.required'     => 'El precio es requerido',
        ])->validate();

        $producto = Producto::findOrFail($this->state['id']);
        if ($this->imagen)
        {
            $this->nombreArchivo = $this->imagen->getClientOriginalName();
            $this->imagen->storeAs('productos', $this->nombreArchivo);
        }else
        {
            $this->nombreArchivo = $producto->imagen;
        }
        $producto->update([
            'nombre'            => $this->state['nombre'],
            'caracteristicas'   => $this->state['caracteristicas'],
            'precio_venta'      => $this->state['precio_venta'],
            'imagen'            => $this->nombreArchivo,
        ]);
        $this->emit('hide-modal');
        $this->resetUI();
        $this->alert('success', 'Producto actualizado!!',['timerProgressBar' => true]);
    }
}
