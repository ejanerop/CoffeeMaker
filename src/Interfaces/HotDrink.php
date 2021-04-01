<?php

namespace Deliverea\CoffeeMachine\Interfaces;

interface HotDrink
{
        
    public function isHot() : string ;    

    public function warm( bool $warm ) : void ;    
    
}