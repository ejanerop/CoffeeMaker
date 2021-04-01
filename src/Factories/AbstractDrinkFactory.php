<?php

namespace Deliverea\CoffeeMachine\Factories;


interface AbstractDrinkFactory
{        
    
    static function makeDrink( string $type ); 
    
    
}