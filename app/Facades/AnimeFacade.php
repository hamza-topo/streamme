<?php 
namespace App\Facades;

use App\Services\AnimeService;
class AnimeFacade extends Facade 
{
    public static function initInstance()
    {
        return self::$service = app()->make(AnimeService::class);
    }

}