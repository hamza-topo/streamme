<?php

namespace App\Spiders;

use App\Spiders\Processors\CreateAnimeProcessor;
use Generator;
use RoachPHP\Downloader\Middleware\RequestDeduplicationMiddleware;
use RoachPHP\Extensions\LoggerExtension;
use RoachPHP\Extensions\StatsCollectorExtension;
use RoachPHP\Http\Response;
use RoachPHP\Http\Request;
use RoachPHP\Spider\BasicSpider;
use RoachPHP\Spider\ParseResult;

class AnimeVostFrSpider extends BasicSpider
{

    public int|bool $page = 1;

    public array $startUrls = [
        //
    ];

    public array $downloaderMiddleware = [
        RequestDeduplicationMiddleware::class,
    ];

    public array $spiderMiddleware = [
        //  UserAgentMiddleware::class,
    ];

    public array $itemProcessors = [
        CreateAnimeProcessor::class
    ];

    public array $extensions = [
        LoggerExtension::class,
        StatsCollectorExtension::class,
    ];

    public int $concurrency = 2;

    public int $requestDelay = 1;

    /**
     * @return Generator<ParseResult>
     */
    public function parse(Response $response): Generator
    {
        $animes = [];
        $response
            ->filterXPath('//div[contains(@class, "ml-item")]')
            ->reduce(function ($node) use (&$animes) {
                $nodes = $node->children();
                $nodesContent = collect($nodes->last()->children());
                $nodesContentMedia = collect($nodes->first()->children());
                $items      = $nodesContent->map(function ($node) {
                    return  $this->content($node);
                })->filter();
                
                $animesMerged = array_values($items->toArray());
                array_push($animes, array_merge($animesMerged[0],$animesMerged[1],$animesMerged[2]) );
            });
        yield  $this->item(compact('animes'));
    }

    /** @return Request[] */
    protected function initialRequests(): array
    {
        
        if($this->page < 111)
            return [
                new Request(
                    'GET',
                    'https://animevostfr.tv/topic/anime/'.$this->page,
                    [$this, 'parse']
                ),
            ];
    }

    private function content($node): array
    {
        $item = [];
        if ($node->tagName == 'p' && $node->textContent != '')
            $item['description'] = $node->textContent;
        if ($node->tagName == 'div' && $node->getAttribute('class') == 'qtip-title')
            $item['title'] = $node->textContent;
        if ($node->tagName == 'div' && $node->getAttribute('class') == 'jtip-quality')
            $item['quality'] = $node->textContent;
        return $item;
    }

}
