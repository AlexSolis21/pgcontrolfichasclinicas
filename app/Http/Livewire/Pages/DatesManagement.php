<?php

namespace App\Http\Livewire\Pages;

use App\Models\Dates;
use Livewire\Component;

class DatesManagement extends Component
{
   
    public $fecha_cita, $hora_cita, $descripcion, $patient_id;
    public $search = '';

    protected function rules()
    {
        return [
            'fecha1_cita' => 'requerid|string|min:6',
            'hora_cita' => 'required|string|min:4',
            'descripcion' => 'nullable|string|min:6',
            'apellidos' => 'required|string|min:6',
            'patient_id' => 'required',
        ];
    }

    
    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveDates()
    {
        $validatedData = $this->validate();

        Dates::create($validatedData);
        session()->flash('message', 'Cita Creada Correctamente');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editDates(int $dates_id)
    {
        $dates = Dates::find($dates_id);
        if ($dates) {
            $this->dates_id = $dates->id;
            $this->fecha_cita = $dates->fecha_cita;
            $this->hora_cita = $dates->hora_cita;
            $this->descripcion = $dates->descripcion;
            $this->patient_id = $dates->patient_id;
        } else {
            return redirect()->to('/pacientes');
        }
    }

    public function updateDates()
    {
        $validatedData = $this->validate();
        Dates::where('id', $this->dates_id)->update($validatedData);
        session()->flash('message', 'Cita Actualizada Correctamente');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteDates(int $dates_id)
    {
        $this->dates_id = $dates_id;
    }

    public function destroyDates()
    {
        Dates::find($this->dates_id)->delete();
        session()->flash('message', 'Cita Eliminada Correctamente');
        $this->dispatchBrowserEvent('close-modal');
    }


    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->fecha_cita = '';
        $this->hora_cita = '';
        $this->descripcion = '';
        $this->patient_id = '';
       
    }


    public function render()
    {
        $dates = Dates::where('descripcion','like', '%' . $this->search . '%')->orderBy('id', 'ASC')->paginate(8);
        return view('livewire.pages.dates-management', ['dates' => $dates]); 
    }
}
