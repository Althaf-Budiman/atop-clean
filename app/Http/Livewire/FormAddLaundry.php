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

    public function updatedSelectedCategory($categoryId)
    {
        if (!is_null($categoryId)) {
            $this->treatments = Treatment::where('category_id', $categoryId)->get();
        }
    }

    public function render()
    {
        return view('livewire.form-add-laundry');
    }
}
