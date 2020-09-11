<?php
namespace IcyApril\ChapterOne;

class Cat extends Animal
{
    public function eat(string $food): bool
    {
        if ($food === "tuna") {
            return true;
        } else {
            return false;
        }
    }

    public function talk(bool $shout): string
    {
        if ($shout === true) {
            return "MEOW!";
        } else {
            return "Meow.";
        }
    }
}