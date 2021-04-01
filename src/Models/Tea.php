<?php

namespace Deliverea\CoffeeMachine\Models;

use Deliverea\CoffeeMachine\Interfaces\HotDrink;
use Deliverea\CoffeeMachine\Traits\Sweetable;

class Tea extends Drink implements HotDrink
{
    use Sweetable;

    public function __construct()
    {
        $this->type = 'tea';
        $this->prize = '0.4';
    }
    
    public function getMessage()
    {
        return parent::getMessage() . ' ' . $this->isHot() . $this->sugars() . PHP_EOL;
    }
    
    public function isHot(): string
    {
        return $this->extraHot ? 'extra hot ' : '';
    }

    public function warm( bool $warm ): void
    {
        $this->extraHot = $warm;
    }
    
}