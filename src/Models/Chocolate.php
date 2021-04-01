<?php

namespace Deliverea\CoffeeMachine\Models;

use Deliverea\CoffeeMachine\Interfaces\HotDrink;
use Deliverea\CoffeeMachine\Traits\Sweetable;

class Chocolate extends Drink implements HotDrink 
{
    use Sweetable;

    public function __construct()
    {
        $this->type = 'chocolate';
        $this->prize = '0.6';
    }
    
    public function isHot(): bool
    {
        return true;
    }

    public function sugars(): int
    {
        return 0; 
    }
    
}