<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct(protected CategoryService $categoryService)
    {
        
    }

    public function __invoke()
    {
        return view('back.categories.list',[
            'categories'=>$this->categoryService->all()
        ]);
    }

    public function create()
    {
        return view('back.categories.create');
    }

    public function edit(int $id)
    {
        return view('back.categories.edit',[
            'category'=>$this->categoryService->find($id)
        ]);
    }
}
