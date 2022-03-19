<?php

namespace App\Services;

use App\Enums\CacheTags;
use App\Models\Anime;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;

class AnimeService implements Service
{

    public function find(int $id): Anime
    {
        return Anime::findOrFail($id);
    }

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

    public function update(int $id, array $anime): Anime
    {
        $updatedAnime = $this->find($id);
        $updatedAnime->update($anime);
        $updatedAnime->refresh();
        return $updatedAnime;
    }

    public function delete(int $id): bool
    {
        return $this->find($id)->destroy($id);
    }

    public function restore(int $id): bool
    {
        return $this->find($id)->restore();
    }

    public function all(): LengthAwarePaginator
    {
        return Cache::remember(CacheTags::ALL_ANIMES, 240, function () {
            return   Anime::paginate(CacheTags::PAGINATE_ITEMS);
        });
    }

    public function forget(): bool
    {
        return Cache::forget(CacheTags::ALL_ANIMES);
    }
}
