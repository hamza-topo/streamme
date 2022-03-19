<?php

namespace App\Http\Livewire\Admin;

use App\Facades\CategoryFacade;
use Livewire\Component;

class CategoryEdit extends Component
{
    public array $category = [];

    public function save()
    {
        try {
            $category = CategoryFacade::update($this->category['id'],$this->category);
            CategoryFacade::forget();
            $this->clear();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function clear(){
        $this->reset(['category']);
        $this->emit('succes');
    }
    
    public function render()
    {
        return view('livewire.admin.category-edit');
    }
}
