<?php

namespace App\View\Components\Admin\Anime;

use App\Models\Anime;
use Illuminate\View\Component;

class AnimeLine extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public Anime $anime)
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
        return view('components.admin.anime.anime-line');
    }
}
