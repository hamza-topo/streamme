<?php 
namespace App\Facades;

use App\Services\CategoryService;

class CategoryFacade extends Facade {


    public static function initInstance()
    {
        return self::$service = app()->make(CategoryService::class);
    }

}