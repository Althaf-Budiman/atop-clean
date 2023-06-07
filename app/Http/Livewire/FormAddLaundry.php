<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormAddLaundry extends Component
{
    public $kategori;

    public function mount() 
    {
        
    }

    public function render()
    {
        return view('livewire.form-add-laundry');
    }
}
