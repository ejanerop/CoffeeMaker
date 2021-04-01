<?php


interface AbstractDrinkFactory
{        
    
    public function makeDrink( string $type ) : Drink ; 
    
    
}