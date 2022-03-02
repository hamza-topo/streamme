<?php

namespace App\Http\Livewire\Admin;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Facades\AnimeFacade;
use Livewire\Component;

class AnimeCreate extends Component
{
    use LivewireAlert;
    public array $anime = [];


    public function save()
    {
        //TODO:mediable and morphable categories  and validation via traits will be good 
        try {
             $anime = AnimeFacade::save($this->anime);
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
