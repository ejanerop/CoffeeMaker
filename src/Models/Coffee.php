<?php

namespace Deliverea\CoffeeMachine\Models;

use Deliverea\CoffeeMachine\Interfaces\HotDrink;
use Deliverea\CoffeeMachine\Traits\Sweetable;

class Coffee extends Drink implements HotDrink
{
    use Sweetable;

    public function __construct()
    {
        $this->type = 'coffee';
        $this->prize = '0.5';
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