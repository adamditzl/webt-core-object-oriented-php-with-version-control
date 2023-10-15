<?php

namespace src;

require_once 'VideoAbstract.php';
require_once 'Videointerface.php';
class YouTube extends VideoAbstract implements Videointerface
{

    public function __construct(string $title, string $id)
    {
        parent::__construct("YouTube", $title, $id); //ruft Attribute vom parent ab
    }

    public function getName(): string //gibt Namen zurück
    {
        return $this->title;
    }

    public function getSource(): string //src ist hier der Name der Plattform
    {
        return $this->src;
    }

    public function getID(): string //liefert ID zurück (z.B. FjuZJQdEcdg)
    {
        return $this->id;
    }

    public function getHTML(): string //macht iframe
    {
        return '<iframe src="https://www.youtube.com/embed/' . $this->getID() . '" width="360" height="203" title="' . $this->title . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
    }
}