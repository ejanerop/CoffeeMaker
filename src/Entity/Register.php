<?php

namespace Deliverea\CoffeeMachine\Entity;

use Deliverea\CoffeeMachine\Entity\Connection;

class Register
{
    public static function logDrink( string $type , float $prize ) 
    {
        $product = new SoldDrink();
        $product->setType($type);
        $product->setPrize($prize);
        
        Connection::getManager()->persist($product);
        Connection::getManager()->flush();
    }

    public static function getSoldAmount( string $type ) 
    {
        $soldDrinks = Connection::getManager()->getRepository(SoldDrink::class)->findBy(array('type' => $type));
        $sum = 0.0;
        foreach ($soldDrinks as $drink) {
            $sum += $drink->getPrize();
        }
        
        return $sum;
    }


}