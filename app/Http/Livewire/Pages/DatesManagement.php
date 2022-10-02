<?php

namespace App\Http\Livewire\Pages;

use App\Models\Dates;
use Livewire\Component;

class DatesManagement extends Component
{
    
    public function render()
    {
        $dates = Dates::where('descripcion','like', '%' . $this->search . '%')->orderBy('id', 'ASC')->paginate(8);
        return view('livewire.pages.dates-management', ['dates' => $dates]); 
    }
}
