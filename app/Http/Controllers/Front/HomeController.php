<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\AnimeService;

class HomeController extends Controller
{
    public function __construct(protected AnimeService $repository)
    {
        
    }

    public function __invoke()
    {
        return view('front.home',[
            'animes'=>$this->repository->all()
        ]);
    }
}
