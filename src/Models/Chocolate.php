<?php


class Chocolate extends Drink 
{
    use Sweetable , Heatable;

    public function __construct()
    {
        $this->type = 'chocolate';
        $this->prize = '0.6';
    }
    
}