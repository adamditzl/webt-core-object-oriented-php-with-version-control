<?php

abstract class VideoAbstract implements Videointerface
{
    private string $src;
    private string $title;

    /**
     * @param string $src
     * @param string $title
     */

    public function __construct(string $src, string $title)
    {
        $this->src = $src;
        $this->title = $title;
    }
}