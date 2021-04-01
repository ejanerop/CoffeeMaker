<?php


class DrinkFactory implements AbstractDrinkFactory 
{
    
    public function makeDrink( string $type ): Drink
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
                $drink = new Tea;
                break;
        }

        return $drink;
    }
    
}