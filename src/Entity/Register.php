<?php

namespace Deliverea\CoffeeMachine\Entity;



class Register
{
    public static function logDrink( string $type , float $prize ) {
        require "config/bootstrap.php";
        $product = new SoldDrink();
        $product->setType($type);
        $product->setPrize($prize);
        
        $entityManager->persist($product);
        $entityManager->flush();
    }

    public static function getSoldAmount( string $type ) {
        require "config/bootstrap.php";
        $soldDrinks = $entityManager->getRepository(SoldDrink::class)->findBy(array('type' => $type));
        $sum = 0.0;
        foreach ($soldDrinks as $drink) {
            $sum += $drink->getPrize();
        }
        
        return $sum;
    }


}