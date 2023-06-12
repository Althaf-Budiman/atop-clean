<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Treatment;
use Livewire\Component;

class FormAddLaundry extends Component
{
    public $categories;
    public $treatments;

    public $selectedCategory = null;

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

    public function render()
    {
        return view('livewire.form-add-laundry');
    }
}
