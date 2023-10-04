<?php

namespace src;
interface Videointerface
{
    public function getName(): string;

    public function getSource(): string;

    public function getID(): string;

    public function getHTML(): string;
}