<div>
    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="sm:px-6 w-full">
                        <div class="px-4 md:px-5 py-4 md:py-4">
                            <div class="flex items-center justify-between">
                                <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-white">Productos</p>
                                <button wire:click="abrirModal()" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                                    <p class="text-sm font-medium leading-none text-white">Agregar</p>
                                </button>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-900  py-4 md:py-2 px-4 md:px-8 xl:px-10">
                            <div class="mt-7 overflow-x-auto">
                                <div class="px-3 py-4 flex justify-center">
                                    <table class="min-w-max w-full table-auto">
                                        <thead>
                                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                            <th class="py-3 px-6 text-left">Id</th>
                                            <th class="py-3 px-6 text-left">Nombre</th>
                                            <th class="py-3 px-6 text-center">Precio</th>
                                            <th class="py-3 px-6 text-center">Estado</th>
                                            <th class="py-3 px-6 text-center">Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-gray-600 text-sm font-light">
                                        @foreach($productos as $producto)
                                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="mr-2">
                                                    <span class="font-medium">{{$producto->id}}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-left">
                                                <div class="flex items-center">
                                                    <span>{{$producto->nombre}}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-center">
                                                <div class="flex items-center justify-center">
                                                    <span>S/ {{ number_format($producto->precio_venta,2)}}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-center">
                                                <span class="bg-green-200 text-white-600 py-1 px-3 rounded-full text-xs">{{$producto->estado}}</span>
                                            </td>
                                            <td class="py-3 px-6 text-center">
                                                <div class="flex item-center justify-center">
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </div>
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <a href="javascript:void(0)" wire:click="editar({{ $producto->id }})"><i class="fa-solid fa-pencil"></i></a>
                                                    </div>
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <x-jet-dialog-modal wire:model="modal">
        <x-slot name="title">
            Agregar producto
        </x-slot>
        <x-slot name="content">
            <div class="mt-4">
                <x-jet-input type="text" class="mt-1 block w-3/4" placeholder="Producto nuevo" wire:model.defer="state.nombre"  />
                <x-jet-input-error for="nombre" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-jet-input type="text" class="mt-1 block w-3/4" placeholder="caracteristicas" wire:model.defer="state.caracteristicas"  />
                <x-jet-input-error for="caracteristicas" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-jet-input type="text" class="mt-1 block w-3/4" placeholder="precio S/" wire:model.defer="state.precio_venta"  />
                <x-jet-input-error for="precio_venta" class="mt-2" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-danger-button wire:click="resetUI()" wire:loading.attr="disabled">Cancelar</x-jet-danger-button>
            @if($selected_id < 1)
                <x-jet-secondary-button class="ml-3" wire:click="store()" wire:loading.attr="disabled">Crear</x-jet-secondary-button>
            @else
                <x-jet-secondary-button class="ml-3" wire:click="actualizar()" wire:loading.attr="disabled">Actualizar</x-jet-secondary-button>
            @endif
        </x-slot>
    </x-jet-dialog-modal>
</div>
