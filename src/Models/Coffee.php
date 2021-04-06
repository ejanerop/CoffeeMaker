<?php

namespace Deliverea\CoffeeMachine\Models;

use Deliverea\CoffeeMachine\Interfaces\HotDrink;
use Deliverea\CoffeeMachine\Traits\Sweetable;
use Deliverea\CoffeeMachine\Entity\Register;

class Coffee extends Drink implements HotDrink
{
    use Sweetable;
    
    private bool $extraHot = false; 
    
    public function __construct()
    {
        $this->type = 'coffee';
        $this->prize = '0.5';
    }
    
    /**
    * Build and returns the success message when a user orders a coffee.
    *
    * @return string The message to be displayed in the console.
    */
    protected function getMessage()
    {
        return parent::getMessage() . $this->isHot() . $this->sugars() ;
    }
    
    /**
    * Returns 'extra hot' when the option extra hot is selected.
    *
    *
    * @return string The 'extra hot' string if the user selected that option.
    */
    public function isHot(): string
    {
        return $this->extraHot ? ' extra hot' : '';
    }
    
    /**
    * Set the extra hot option to true or false.
    *
    * @param bool $warm The extra hot option
    *
    * @return void 
    */
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