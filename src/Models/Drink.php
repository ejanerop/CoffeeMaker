<?php

namespace Deliverea\CoffeeMachine\Models;


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
    
    
}

