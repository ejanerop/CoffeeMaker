<?php

namespace Deliverea\CoffeeMachine\Models;

use Exception;

abstract class Drink
{    
    protected float $prize;
    protected string $type;
    
    
    public function getPrize() {
        return $this->prize;
    }
    
    public function getType() {
        return $this->type;
    }
    
    protected function isEnough( float $money ) {
        
        return $money >= $this->prize;
        
    }

    public function payDrink( float $money ) {
        if ($this->isEnough($money)) {
            return;
        } else {
            throw new Exception('The ' . $this->type . ' costs ' . $this->prize);            
        }
        
    } 
    
    
}

