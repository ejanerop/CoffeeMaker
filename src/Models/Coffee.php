<?php


class Coffee extends Drink
{
    use Sweetable , Heatable;
    
    public function __construct()
    {
        $this->type = 'coffee';
        $this->prize = '0.5';
    }
    
}