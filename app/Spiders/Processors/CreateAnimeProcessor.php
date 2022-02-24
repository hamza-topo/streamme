<?php

namespace App\Spiders\Processors;

use App\Facades\AnimeFacade;
use App\Services\AnimeService;
use RoachPHP\ItemPipeline\ItemInterface;
use RoachPHP\ItemPipeline\Processors\ItemProcessorInterface;
use RoachPHP\Support\Configurable;


class CreateAnimeProcessor implements ItemProcessorInterface
{

    use Configurable;


    public function processItem(ItemInterface $item): ItemInterface
    {
        AnimeFacade::createMultipleAnimes($item->all());
        return $item->set('id', 10);
    }
}
