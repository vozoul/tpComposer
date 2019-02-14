<?php

namespace App\Animals;


use App\Animal;

class Zebra extends Animal
{

    /**
     * @return string
     */
    protected function getNoise(): string
    {
        return "HHIiiiiiii";
    }
}