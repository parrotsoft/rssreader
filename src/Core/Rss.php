<?php

namespace Mlopez\RssReader\Core;

use SimpleXMLElement;

class Rss
{
    private SimpleXMLElement $title;
    private SimpleXMLElement $link;
    private SimpleXMLElement $description;
    private SimpleXMLElement $language;

    private $items;

    public function __construct($title, $link, $description, $language, $items)
    {
        $this->title = $title;
        $this->link = $link;
        $this->description = $description;
        $this->language = $language;
        $this->items = $items;
    }

    public function getTitle(): string
    {
        return $this->title->__toString();
    }

    public function getLink(): string
    {
        return $this->link->__toString;
    }

    public function getDescription(): string
    {
        return $this->description->__toString;
    }


    public function getLanguage(): string
    {
        return $this->language->__toString;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function toArray()
    {
        $result = [
            'title' => $this->getTitle(),
            'link' => $this->getLink(),
            'description' => $this->getDescription(),
            'language' => $this->getLanguage(),
        ];

        $items = [];
        foreach ($this->getItems() as $item)
        {
            $item_obj = new Item($item->title, $item->link, $item->description, $item->pubDate, $item->guid, $item->comments);
            $items[] = [
                'title' => $item_obj->getTitle(),
                'link' => $item_obj->getLink(),
                'description' => preg_replace("/\s+/", " ", $item_obj->getDescription()),
                'pubDate' => $item_obj->getPubDate(),
                'guid' => $item_obj->getGuid(),
                'comments' => $item_obj->getComments(),
            ];
        }
        $result['items'] = $items;
        return $result;
    }
}