<?php


class Tea extends Drink implements HotDrink
{

    public function __construct()
    {
        $this->type = 'tea';
        $this->prize = '0.4';
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