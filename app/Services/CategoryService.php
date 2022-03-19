<?php

namespace App\Services;

use App\Enums\CacheTags;
use App\Models\Category;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;

class CategoryService implements Service
{

    public function find(int $id): Category
    {
        return Category::findOrFail($id);
    }

    public function createMultipleAnimes(array $categories)
    {
        foreach ($categories['animes'] as $category) {
            $category['slug'] = slugify($category['title']);
            $this->save($category);
        }
    }

    public function save(array $category): Category
    {
        $category['slug'] = slugify($category['title']);
        return  Category::create($category);
    }

    public function update(int $id, array $category): Category
    {
        $updatedAnime = $this->find($id);
        $updatedAnime->update($category);
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
        return Cache::remember(CacheTags::ALL_CATEGORIES, 240, function () {
            return   Category::paginate(CacheTags::PAGINATE_ITEMS);
        });
    }

    public function forget(): bool
    {
        return Cache::forget(CacheTags::ALL_CATEGORIES);
    }
}
