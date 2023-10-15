<?php
namespace src;

require_once 'VideoAbstract.php';
require_once 'Videointerface.php';

class Vimeo extends VideoAbstract implements Videointerface
{

    public function __construct(string $title, string $id)
    {
        parent::__construct("Vimeo", $title, $id);
    }

    public function getName(): string
    {
        return $this->title;
    }

    public function getSource(): string
    {
        return $this->src;
    }

    public function getID(): string
    {
        return $this->id;
    }

    public function getHTML(): string
    {
        return '<iframe src="https://player.vimeo.com/video/' . $this->getID() . '" width="360" height="203" title="' . $this->title . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
    }
}