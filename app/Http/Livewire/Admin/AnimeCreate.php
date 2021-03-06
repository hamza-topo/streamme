<?php

namespace App\Http\Livewire\Admin;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Facades\AnimeFacade;
use Livewire\Component;
use Livewire\WithFileUploads;

class AnimeCreate extends Component
{
    use WithFileUploads;
    public array $anime = [];


    public function save()
    {
        try {
            if(method_exists($this->anime['poster'],'temporaryUrl'))
             $this->anime['poster'] = $this->anime['poster']
                                           ->storeAs('/', $this->anime['poster']->getClientOriginalName(),'public');
             $anime = AnimeFacade::save($this->anime);
             AnimeFacade::forget();
             $this->clear();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }   
    }

    public function clear(){
        $this->reset(['anime']);
        $this->emit('succes');
    }

    public function render()
    {
        return view('livewire.admin.anime-create');
    }
}
