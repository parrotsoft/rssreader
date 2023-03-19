<?php

namespace Mlopez\RssReader\Core;

use SimpleXMLElement;
class Item
{
    private SimpleXMLElement $title;
    private SimpleXMLElement $link;
    private SimpleXMLElement $description;
    private SimpleXMLElement $pubDate;
    private SimpleXMLElement $guid;
    private SimpleXMLElement $comments;

    public function __construct(
        SimpleXMLElement $title,
        SimpleXMLElement $link,
        SimpleXMLElement $description,
        SimpleXMLElement $pubDate,
        SimpleXMLElement $guid,
        SimpleXMLElement $comments
    ) {
        $this->title = $title;
        $this->link = $link;
        $this->description = $description;
        $this->pubDate = $pubDate;
        $this->guid = $guid;
        $this->comments = $comments;
    }

    public function getTitle(): string
    {
        return $this->title->__toString();
    }

    public function getLink(): string
    {
        return $this->link->__toString();
    }

    public function getDescription(): string
    {
        return $this->description->__toString();
    }

    public function getPubDate(): string
    {
        return $this->pubDate->__toString();
    }

    public function getGuid(): string
    {
        return $this->guid->__toString();
    }

    public function getComments(): string
    {
        return $this->comments->__toString();
    }
}