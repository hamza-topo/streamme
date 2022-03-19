<?php

namespace App\View\Components\Admin\Category;

use App\Models\Category;
use Illuminate\View\Component;

class CategoryLine extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public Category $category)
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
        return view('components.admin.category.category-line');
    }
}
