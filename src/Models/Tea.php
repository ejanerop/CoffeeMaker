<?php


class Tea extends Drink
{

    public function __construct()
    {
        $this->type = 'tea';
        $this->prize = '0.4';
    }
    
}