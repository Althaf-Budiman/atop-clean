<?php

namespace App\Http\Livewire;

use App\Models\Laundry;
use Livewire\Component;

class DaftarPesanan extends Component
{
    public $laundries;

    public function mount()
    {
        $this->laundries = Laundry::all();
    }

    public function render()
    {
        return view('livewire.daftar-pesanan');
    }
}
