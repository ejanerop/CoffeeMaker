<?php


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