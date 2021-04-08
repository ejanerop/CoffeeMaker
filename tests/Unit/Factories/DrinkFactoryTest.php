<?php

namespace Deliverea\CoffeeMachine\Tests\Unit\Console;

use Deliverea\CoffeeMachine\Exceptions\DrinkNotFoundException;
use Deliverea\CoffeeMachine\Factories\DrinkFactory;
use Deliverea\CoffeeMachine\Models\Chocolate;
use Deliverea\CoffeeMachine\Models\Coffee;
use Deliverea\CoffeeMachine\Models\Tea;
use PHPUnit\Framework\TestCase;
use Doctrine\ORM\EntityManager;

class DrinkFactoryTest extends TestCase
{
    
    public function testMakeChocolate()
    {        
        $drink = DrinkFactory::makeDrink('chocolate');
        $this->assertInstanceOf(Chocolate::class , $drink);
        
    }
    
    public function testMakeCoffee()
    {        
        $drink = DrinkFactory::makeDrink('coffee');
        $this->assertInstanceOf(Coffee::class , $drink);
    }
    
    public function testMakeTea()
    {        
        $drink = DrinkFactory::makeDrink('tea');
        $this->assertInstanceOf(Tea::class , $drink);
    }
    
    public function testDrinkNotFound()
    {        
        $this->expectException(DrinkNotFoundException::class);
        
        $drink = DrinkFactory::makeDrink('beer');
    }
}
