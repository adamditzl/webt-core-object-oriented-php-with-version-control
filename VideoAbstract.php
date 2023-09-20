<?php

abstract class VideoAbstract implements Videointerface
{
    public function __construct($src, $title) {
        this->src = $src;
        this->src = $title;
    }
}