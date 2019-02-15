<?php

namespace App;

class Enclosure{
    private $animals = [];

    public function addAnimal(Animal $animal){
        $this->animals[] = $animal;
    }

    public function __toString(): string{
        $echo = "The animal :";
        foreach($this->animals as $animal){
            $echo .= $animal->getName()." do this noise: ";
            $echo .= $animal->noise();
        }
        echo $echo;
    }

}