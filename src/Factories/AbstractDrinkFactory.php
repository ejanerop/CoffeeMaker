<?php

namespace Deliverea\CoffeeMachine\Factories;


interface AbstractDrinkFactory
{        
    /**
    * Creates a new instance of a drink.
    *
    *
    * @param string $type Type of drink to be instantiated.
    *
    * @return Drink An instance of a Drink children's class.
    */
    static function makeDrink( string $type );     
    
}