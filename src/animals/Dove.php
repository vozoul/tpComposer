<?php

namespace App\Animals;


use App\Animal;
use App\Interfaces\CanFly;

class Dove extends Animal implements CanFly
{

    /**
     * @return string
     */
    protected function getNoise(): string
    {
        return "Rou Rouuu";
    }
}