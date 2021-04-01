<?php


trait Sweetable
{
    protected $sugars = 0;
    
    public function sugars() {
        return $this->sugars;
    }

    public function hasStick() {
        return $this->sugars > 0;
    }
    
}