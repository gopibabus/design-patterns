<?php
namespace IcyApril\ChapterOne;

class Dog extends Animal
{
    public function eat(string $food): bool
    {
        if (($food === "dog food") || ($food === "meat")) {
            return true;
        } else {
            return false;
        }
    }

    public function talk(bool $shout): string
    {
        if ($shout === true) {
            return "WOOF!";
        } else {
            return "Woof woof.";
        }
    }
}