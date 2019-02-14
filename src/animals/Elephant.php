<?php

namespace App\Animals;


use App\Animal;

class Elephant extends Animal
{

    /**
     * @return string
     */
    protected function getNoise(): string
    {
        return "toooouuut";
    }
}