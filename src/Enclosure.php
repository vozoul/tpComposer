<?php
/**
 * Created by PhpStorm.
 * User: Vin's
 * Date: 14/02/2019
 * Time: 19:03
 */

namespace App;

class Enclosure
{
    public static $animals = [];

    public static function addAnimal($animal){
        return static::$animals[] = $animal;
    }

    public static function toString(){
        var_dump(static::$animals);
    }

}