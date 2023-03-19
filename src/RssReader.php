<?php

namespace Mlopez\RssReader;

use Mlopez\RssReader\Core\Rss;

class RssReader
{
    private string $rss_source;
    private Rss $rss;
    public function __construct(string $rss_source)
    {
        $this->rss_source = $rss_source;
    }

    public function reader(): self
    {
        try {
            $ressult = simplexml_load_string(file_get_contents($this->rss_source));
            $channel = $ressult->channel;
            $this->rss = new Rss($channel->title, $channel->link, $channel->description, $channel->language,
                $channel->item);
            return $this;
        } catch (\Exception $e) {
            error_log($e);
        }
    }

    public function toArray(): array
    {
        return $this->rss->toArray();
    }
}