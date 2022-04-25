<div>
    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="sm:px-6 w-full">
                        <div class="px-4 md:px-5 py-4 md:py-4">
                            <div class="flex items-center justify-between">
                                <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-white">Productos</p>
                                <button wire:click="abrirModal(true)" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                                    <p class="text-sm font-medium leading-none text-white">Agregar</p>
                                </button>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-900  py-4 md:py-2 px-4 md:px-8 xl:px-10">
                            <div class="mt-7 overflow-x-auto">
                                <table class="w-full whitespace-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th class="text-center">Nombre</th>
                                        <th>Estado</th>
                                        <th>Precio</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($productos as $producto)
                                    <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 dark:border-gray-600  rounded">
                                        <td class="">
                                            <div class="text-center">
                                                <p class="text-base font-medium leading-none text-gray-700 dark:text-white  mr-2">{{$producto->id}}</p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-gray-600 dark:text-gray-200  ml-2">{{$producto->nombre}}</p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-gray-600 dark:text-gray-200  ml-2">{{$producto->estado}}</p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-gray-600 dark:text-gray-200  ml-2">{{number_format($producto->precio_venta,2)}}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="relative px-5 pt-2">
                                                <button class="focus:ring-2 rounded-md focus:outline-none" onclick="dropdownFunction(this)" role="button" aria-label="option">
                                                    <img  class="dropbtn" onclick="dropdownFunction(this)" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg6.svg" alt="dropdown">
                                                </button>
                                                <div class="dropdown-content bg-white shadow w-24 absolute z-30 right-0 mr-6 hidden">
                                                    <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                        <p>Edit</p>
                                                    </div>
                                                    <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                        <p>Delete</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="h-3"></tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <x-jet-dialog-modal wire:model="selected_id">
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
                <x-jet-input type="text" class="mt-1 block w-3/4" placeholder="precio S/" wire:model.defer="state.precio"  />
                <x-jet-input-error for="precio" class="mt-2" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-danger-button wire:click="cancelar(false)" wire:loading.attr="disabled">Cancelar</x-jet-danger-button>
            <x-jet-secondary-button class="ml-3" wire:click="store()" wire:loading.attr="disabled">Crear</x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
