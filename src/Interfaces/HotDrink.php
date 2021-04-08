<?php

namespace Deliverea\CoffeeMachine\Interfaces;

interface HotDrink extends Option
{
        
    public function isHot() : string ;    

    public function warm( bool $warm ) : void ;    
    
}