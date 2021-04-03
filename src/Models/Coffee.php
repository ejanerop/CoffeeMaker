<?php

namespace Deliverea\CoffeeMachine\Models;

use Deliverea\CoffeeMachine\Interfaces\HotDrink;
use Deliverea\CoffeeMachine\Traits\Sweetable;

class Coffee extends Drink implements HotDrink
{
    use Sweetable;
    
    private bool $extraHot = false; 
    
    public function __construct()
    {
        $this->type = 'coffee';
        $this->prize = '0.5';
    }
    
    public function getMessage()
    {
        return parent::getMessage() . $this->isHot() . $this->sugars() ;
    }
    
    public function isHot(): string
    {
        return $this->extraHot ? ' extra hot' : '';
    }
    
    public function warm( bool $warm ): void
    {
        $this->extraHot = $warm;
    }
    
}