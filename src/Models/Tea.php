<?php

namespace Deliverea\CoffeeMachine\Models;

use Deliverea\CoffeeMachine\Interfaces\HotDrink;
use Deliverea\CoffeeMachine\Traits\Sweetable;
use Deliverea\CoffeeMachine\Entity\Register;

class Tea extends Drink implements HotDrink
{
    use Sweetable;
    
    private bool $extraHot = false; 

    public function __construct()
    {
        $this->type = 'tea';
        $this->prize = '0.4';
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

    public function order( float $money , int $sugars = 0 , bool $warm = false ) 
    {
        $this->pay($money);
        $this->addSugars($sugars);
        $this->warm($warm);
        Register::logDrink( $this->type , $this->prize );

        return $this->getMessage();
    }
    
}