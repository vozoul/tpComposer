<?php

namespace App;


class Animal{
    private $name;

    /**
     * Animal constructor.
     * @param $name
     */
    public function __construct($name){
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    protected function getName(){
        return $this->name;
    }

    /**
     * @return string
     */
    protected abstract function getNoise():string;

    /**
     * @return mixed
     */
    public function noise(){
        return $this->getNoise();
    }
}
