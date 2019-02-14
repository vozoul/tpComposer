<?php

namespace App\Animals;


use App\Animal;

class Whale extends Animal
{

    /**
     * @return string
     */
    protected function getNoise(): string
    {
        return "splash";
    }
}