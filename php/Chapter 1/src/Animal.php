<?php
namespace IcyApril\ChapterOne;

abstract class Animal
{
    abstract public function eat(string $food) : bool;

    abstract public function talk(bool $shout) : string;

    public function walk(int $speed): bool {
        if ($speed > 0) {
            return true;
        } else {
            return false;
        }
    }
}