<div>

    @include('livewire.modals.CitasModal')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                <h5 class="alert alert-success">{{ session('message') }}</h5>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Citas Médicas
                            <input type="search" wire:model="search" class="form-control float-end mx-2"
                                placeholder="Buscar..." style="width: 230px" />
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                                data-bs-target="#datesModal">
                                Agregar Nueva Cita
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd table-striped">
                            <thead>
                                <tr>
                                    <th>Fecha De La Cita</th>
                                    <th>Hora De La Cita</th>
                                    <th>Descripción</th>
                                    <th>Paciente</th>
                                    <th>Acciones</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dates as $date)
                                <tr>
                                    <td>{{ $date->fecha_cita }}</td>
                                    <td>{{ $date->hora_cita }}</td>
                                    <td>{{ $date->descripcion }}</td>
                                    <td>{{ $date->patient_id }}</td>
                                    <td>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#updateDatesModal"
                                            wire:click="editDates({{ $dates->id }})" class="btn btn-primary">
                                            Editar
                                        </button>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#deleteDatesModal"
                                            wire:click="deleteDates({{ $dates->id }})"
                                            class="btn btn-danger">Eliminar</button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5">No se ha encontrado ninguna cita</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            {{ $dates->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('close-modal', event => {
            const datesModal = document.getElementById('datestModal');
            const updateDatesModal = document.getElementById('updateDatesModal');
            const deleteDatesModal = document.getElementById('deleteDatesModal');

            const modal1 = bootstrap.Modal.getInstance(datesModal)
            const modal2 = bootstrap.Modal.getInstance(updateDatesModal)
            const modal3 = bootstrap.Modal.getInstance(deleteDatesModal)

            if (modal1 != null) modal1.hide();
            if (modal2 != null) modal2.hide();
            if (modal3 != null) modal3.hide();
        })
    </script>
</div>