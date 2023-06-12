<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Treatment;
use DateTime;
use Livewire\Component;

class FormAddLaundry extends Component
{
    public $categories;
    public $treatments;

    public $selectedCategory = null;

    // Treatment
    public $selectedTreatment = null;
    public $hargaValue;
    public $tanggalAmbilValue;

    public function mount()
    {
        $this->categories = Category::all();
        $this->treatments = collect();
    }

    public function updatedSelectedCategory($category)
    {
        $categoryObject = json_decode($category);
        if (!is_null($categoryObject)) {
            $this->treatments = Treatment::where('category_id', $categoryObject->id)->get();
        }
    }

    public function updatedSelectedTreatment($treatment)
    {
        $treatmentObject = json_decode($treatment);

        // Harga
        $this->hargaValue = $treatmentObject->harga;

        // Tanggal Ambil
        $tanggalAmbil = new DateTime();
        $tanggalAmbil->modify("+" . $treatmentObject->durasi . " days");

        $this->tanggalAmbilValue = $tanggalAmbil->format("Y-m-d");
    }

    public function render()
    {
        return view('livewire.form-add-laundry');
    }
}
