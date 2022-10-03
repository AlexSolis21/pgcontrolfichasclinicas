<!-- Insert Modal -->
<div wire:ignore.self class="modal fade" id="citastModal" tabindex="-1" aria-labelledby="citasModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentModalLabel">Crear Nueva Cita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="saveCitas">
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
                        <label>patient_id</label>
                        <input type="text" wire:model.lazy="patient_id" class="form-control form-bord">
                        @error('patient_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Update Cita Modal -->
<div wire:ignore.self class="modal fade" id="updatePatientModal" tabindex="-1"
    aria-labelledby="updatePatientModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updatePatientModalLabel">Editar usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="updatePatient">
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
                        <label>patient_id</label>
                        <input type="text" wire:model.lazy="patient_id" class="form-control form-bord">
                        @error('patient_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
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
<!-- Delete Citas Modal -->
<div wire:ignore.self class="modal fade" id="deleteCitasModal" tabindex="-1"
    aria-labelledby="deleteCitasModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCitasModalLabel">Eliminar Cita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyCitas">
                <div class="modal-body">
                    <h4>¿Está seguro de que quiere eliminar la cita?</h4>
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
