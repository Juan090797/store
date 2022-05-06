<div  id="theModal" wire:ignore.self class="modal fade"  tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                @include('common.modalHead')
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" class="form-control" placeholder="nombre" wire:model.defer="state.nombre">
                        </div>
                        @error('nombre') <span class="text-danger er">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="caracteristicas">Caracteristicas</label>
                            <textarea id="caracteristicas" rows="5" class="form-control" placeholder="descripcion" wire:model.defer="state.caracteristicas"></textarea>
                        </div>
                        @error('caracteristicas') <span class="text-danger er">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="number" id="precio" class="form-control" placeholder="precio venta" wire:model.defer="state.precio_venta">
                        </div>
                        @error('precio_venta') <span class="text-danger er">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <select id="estado" class="form-control" wire:model.defer="state.estado">
                                <option value="ELEGIR" selected>Elegir</option>
                                <option value="ACTIVO" >ACTIVO</option>
                                <option value="INACTIVO" >INACTIVO</option>
                            </select>
                        </div>
                        @error('estado') <span class="text-danger er">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-12">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" wire:model="imagen">
                                <label class="custom-file-label">{{ $imagen }}</label>
                            </div>
                        </div>
                        @error('imagen') <span class="text-danger er">{{ $message }}</span>@enderror
                        <div wire:loading wire:target="imagen">Cargando.....</div>
                    </div>
                </div>
            </div>
            @include('common.modalFooter')
        </div>
    </div>
</div>
