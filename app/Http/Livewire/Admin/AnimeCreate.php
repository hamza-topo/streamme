<?php

namespace App\Http\Livewire\Admin;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Facades\AnimeFacade;
use Livewire\Component;
use Livewire\WithFileUploads;

class AnimeCreate extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public array $anime = [];


    public function save()
    {
        try {
             $this->anime['poster'] = $this->anime['poster']->storeAs('/', $this->anime['poster']->getClientOriginalName(),'public');
             $this->anime;
             $anime = AnimeFacade::save($this->anime);
             AnimeFacade::forget();
             $this->clear();
             $this->alert('success', 'Anime: '.$anime['title'].' Created successfuly');
        } catch (\Exception $e) {
            $this->alert('warning', 'What are you trying to dos ?.'.$e->getMessage());
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
