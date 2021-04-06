<?php

namespace Deliverea\CoffeeMachine\Traits;

use Deliverea\CoffeeMachine\Exceptions\IncorrectSugarAmountException;

trait Sweetable
{
    protected $sugars = 0;
    
    public function getSugars() {
        return $this->sugars;
    }
    
    private function hasStick() {
        return $this->sugars > 0;
    }
    
    public function stick() {
        return $this->hasStick() ? '(stick included)' : '' ;
    }
    
    public function sugars() {
        if ($this->hasStick()) {
            return ' with ' . $this->sugars . ' sugars ' . $this->stick();
        }else {
            return '';
        }
    }    

    /**
    * Add the amount of sugars specified, or throws an exception if the amount is invalid.
    *
    *
    * @param int $sugars The number of sugars to add.
    *
    * @throws IncorrectSugarAmountException
    *
    * @return void
    */
    public function addSugars( int $sugars ) {
        if ($sugars >= 0 && $sugars <= 2) {
            $this->sugars = $sugars; 
        }else {
            throw new IncorrectSugarAmountException('The number of sugars should be between 0 and 2.');            
        }
    }
    
}