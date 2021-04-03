<?php

namespace Deliverea\CoffeeMachine\Models;

use Deliverea\CoffeeMachine\Exceptions\NotEnoughCashException;

abstract class Drink
{    
    protected float $prize;
    protected string $type;
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

    public function payDrink( float $money ) {
        if ($this->isEnough($money)) {
            return;
        } else {
            throw new NotEnoughCashException('The ' . $this->type . ' costs ' . $this->prize . '.');            
        }
        
    } 
    
    
}

