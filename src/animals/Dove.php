<?php

namespace App\Animals;


use App\Animal;

class Dove extends Animal
{

    /**
     * @return string
     */
    protected function getNoise(): string
    {
        return "Rou Rouuu";
    }
}