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
        // dd($this->anime['poster']->getClientOriginalName());
        //TODO:mediable and morphable categories  and validation via traits will be good 
        try {
             $this->anime['poster'] = $this->anime['poster']->storeAs('/', $this->anime['poster']->getClientOriginalName(),'public');
             $this->anime;
             $anime = AnimeFacade::save($this->anime);
             AnimeFacade::forget();
             $this->alert('success', 'Anime: '.$anime['title'].' Created successfuly');
        } catch (\Exception $e) {
            $this->alert('warning', 'What are you trying to dos ?.'.$e->getMessage());
            dd($e->getMessage());
        }   
    }
    public function render()
    {
        return view('livewire.admin.anime-create');
    }
}
