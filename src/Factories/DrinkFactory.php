<?php

namespace Deliverea\CoffeeMachine\Factories;

use Deliverea\CoffeeMachine\Exceptions\DrinkNotFoundException;
use Deliverea\CoffeeMachine\Models\Tea;
use Deliverea\CoffeeMachine\Models\Coffee;
use Deliverea\CoffeeMachine\Models\Chocolate;

class DrinkFactory implements AbstractDrinkFactory 
{
    
    /**
    * Creates a new instance of a heatable drink.
    *
    *
    * @param string $type Type of drink to be instantiated.
    * @return Drink An instance of a Drink children's class.
    */
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
                throw new DrinkNotFoundException('There is no such drink');
                break;
        }

        return $drink;
    }
}