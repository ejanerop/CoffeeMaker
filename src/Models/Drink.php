<?php

namespace Deliverea\CoffeeMachine\Models;

use Deliverea\CoffeeMachine\Exceptions\NotEnoughCashException;

abstract class Drink
{    
    protected float  $prize;
    protected string $type ;
    protected string $message = 'You have ordered a ';
    
    
    public function getPrize() {
        return $this->prize;
    }
    
    public function getType() {
        return $this->type;
    }
    
    public function getMessage() {
        return $this->message . $this->type;
    }
    
    protected function isEnough( float $money ) {
        
        return $money >= $this->prize;
        
    }
    
    /**
    * Checks if the user inputs enough money to buy the drink.
    *
    * @param float $money The money input by the user
    *
    *@throws NotEnoughCashException
    *
    * @return void 
    */
    protected function pay( float $money ) {
        if ($this->isEnough($money)) {
            return;
        } else {
            throw new NotEnoughCashException('The ' . $this->type . ' costs ' . $this->prize . '.');            
        }
        
    } 
    
    public function order( float $money ) {
        $this->pay($money);
        return $this->getMessage();
    }
    
    
    
    
    
    
}

