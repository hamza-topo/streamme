<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\AnimeService;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function __construct(protected AnimeService $animeService)
    {
        
    }
    public function __invoke()
    {
        return view('back.animes.list',[
            'animes'=>$this->animeService->all()
        ]);
    }

    public function create()
    {
        return view('back.animes.create');
    }

    public function edit(int $id){

        return view('back.animes.edit',[
            'anime'=>$this->animeService->find($id)
        ]);
    }
}
