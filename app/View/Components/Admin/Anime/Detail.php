<?php

namespace App\View\Components\Admin\Anime;

use Illuminate\View\Component;

class Detail extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public array $anime = [])
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.anime.detail');
    }
}
