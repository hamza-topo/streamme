<?php

namespace App\Http\Livewire\Admin;

use App\Facades\CategoryFacade;
use Livewire\Component;

class CategoryCreate extends Component
{
    public array $category = [];

    public function save()
    {
        try {
            $category = CategoryFacade::save($this->category);
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
        return view('livewire.admin.category-create');
    }
}
