<?php

namespace Deliverea\CoffeeMachine\Factories;

use Deliverea\CoffeeMachine\Models\Tea;
use Deliverea\CoffeeMachine\Models\Coffee;
use Deliverea\CoffeeMachine\Models\Chocolate;
use Exception;

class DrinkFactory implements AbstractDrinkFactory 
{
    
    public static function makeDrink( string $type ) 
    {
        $drink = null;

        switch ($type) {

            case 'tea':
               $drink = new Tea;
                break;

            case 'coffee':
               $drink = new Coffee;
                break;

            case 'chocolate':
               $drink = new Chocolate;
                break;
            
            default:
                throw new Exception('No existe esa bebida');
                break;
        }

        return $drink;
    }
    
}