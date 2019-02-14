<?php

namespace App\Animals;


use App\Animal;

class Fish extends Animal {

    /**
     * @return string
     */
    protected function getNoise(): string
    {
        return "bloubloublou";
    }
}