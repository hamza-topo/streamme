<?php

namespace App\Http\Livewire\Tools;

use Livewire\Component;

class Modal extends Component
{

    public bool $show = false;
    public function getListeners()
    {
        return [
            'succes' => 'show'
        ];
    }

    public function show()
    {
        $this->show = true;
    }

    public function close()
    {
        $this->show = false;
    }

    public function render()
    {
        return view('livewire.tools.modal');
    }
}
