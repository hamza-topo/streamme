<?php

namespace App\Services;

use App\Enums\CacheTags;
use App\Models\Anime;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class AnimeService
{

    public function createMultipleAnimes(array $animes)
    {
        foreach ($animes['animes'] as $anime) {
            $anime['slug'] = slugify($anime['title']);
            $this->save($anime);
        }
    }

    public function save(array $anime): Anime
    {
        $anime['slug'] = slugify($anime['title']);
        return  Anime::create($anime);
    }

    public function all(): Collection
    {
        return Cache::remember(CacheTags::ALL_ANIMES, 240, function () {
            return   Anime::all();
        });
    }

    public function forget(): bool {
        return Cache::forget(CacheTags::ALL_ANIMES);
    }
}
