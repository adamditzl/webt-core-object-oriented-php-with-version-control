<?php

namespace src;
interface Videointerface
{
    public function getName(): string; //eine Funktion, die einen String zurückgibt

    public function getSource(): string; //eine Funktion, die einen String zurückgibt

    public function getID(): string; //eine Funktion, die einen String zurückgibt

    public function getHTML(): string; //eine Funktion, die einen String zurückgibt
}