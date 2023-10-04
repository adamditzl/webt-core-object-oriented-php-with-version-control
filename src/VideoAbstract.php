<?php

namespace src;

abstract class VideoAbstract implements Videointerface
{
    protected string $src;
    protected string $title;
    protected string $id;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getSrc(): string
    {
        return $this->src;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }


    /**
     * @param string $src
     * @param string $title
     */

    public function __construct(string $src, string $title, string $id)
    {
        $this->src = $src;
        $this->title = $title;
        $this->id = $id;
    }
}