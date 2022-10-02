<!-- Insert Modal -->
<div wire:ignore.self class="modal fade" id="patientModal" tabindex="-1" aria-labelledby="patientModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentModalLabel">Crear Nueva Cita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="savePatient">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Fecha De La Cita</label>
                        <input type="date" wire:model.lazy="fecha_cita" class="form-control form-bord">
                        @error('fecha_cita')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Hora De La Cita</label>
                        <input type="time" wire:model.lazy="hora_cita" class="form-control form-bord">
                        @error('hora_cita')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Descripción</label>
                        <input type="text" wire:model.lazy="descripcion" class="form-control form-bord">
                        @error('descripcion')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label>Apellidos</label>
                        <input type="text" wire:model.lazy="apellidos" class="form-control form-bord">
                        @error('apellidos')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Patient Modal -->
<div wire:ignore.self class="modal fade" id="deletePatientModal" tabindex="-1"
    aria-labelledby="deletePatientModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletePatientModalLabel">Eliminar Cita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyPatient">
                <div class="modal-body">
                    <h4>¿Está seguro de que quiere eliminar estos datos?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Sí. Borrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
