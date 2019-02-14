<?php

namespace App\Animals;


use App\Animal;

class Parrot extends Animal
{

    /**
     * @return string
     */
    protected function getNoise(): string
    {
        return "coco";
    }
}