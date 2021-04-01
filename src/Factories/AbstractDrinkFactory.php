<?php

namespace Deliverea\CoffeeMachine\Factories;

use Deliverea\CoffeeMachine\Models\Drink;

interface AbstractDrinkFactory
{        
    
    static function makeDrink( string $type ); 
    
    
}