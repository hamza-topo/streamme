<?php

namespace App\Http\Livewire\Admin;

use App\Facades\AnimeFacade;
use Livewire\Component;
use Livewire\WithFileUploads;

class AnimeEdit extends Component
{
    use WithFileUploads;

    public array $anime;

    public function save()
    {
        try {
            if (method_exists($this->anime['poster'], 'temporaryUrl'))
                $this->anime['poster'] = $this->anime['poster']
                    ->storeAs('/', $this->anime['poster']->getClientOriginalName(), 'public');
            $anime = AnimeFacade::update($this->anime['id'], $this->anime);
            AnimeFacade::forget();
            $this->clear();
            // $this->alert('success', 'Anime: '.$anime['title'].' Created successfuly');
        } catch (\Exception $e) {
            //    $this->alert('warning', 'What are you trying to dos ?.'.$e->getMessage());
            dd($e->getMessage());
        }
    }

    public function delete(){
        try {
            $anime = AnimeFacade::delete($this->anime['id']);
            AnimeFacade::forget();
            $this->clear();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function clear()
    {
        $this->emit('succes');
    }

    public function render()
    {
        return view('livewire.admin.anime-edit');
    }
}
