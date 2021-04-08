<?php

namespace Deliverea\CoffeeMachine\Tests\Unit\Console;

use Deliverea\CoffeeMachine\Exceptions\IncorrectSugarAmountException;
use Deliverea\CoffeeMachine\Factories\DrinkFactory;
use PHPUnit\Framework\TestCase;
use TypeError;

class CofeeTest extends TestCase
{

    public function testDefaultMessage() 
    {
        $drink = DrinkFactory::makeDrink('coffee');
        $this->assertSame('You have ordered a coffee' , $drink->getMessage());
    }

    public function testExtraHotMessage() 
    {
        $drink = DrinkFactory::makeDrink('coffee');
        $drink->warm(true);
        $this->assertSame('You have ordered a coffee extra hot' , $drink->getMessage());
    }

    public function testSweetedMessage() 
    {
        $drink = DrinkFactory::makeDrink('coffee');
        $drink->addSugars(1);
        $this->assertSame('You have ordered a coffee with 1 sugars (stick included)' , $drink->getMessage());
    }

    public function testTooMuchSugar() 
    {
        $this->expectException(IncorrectSugarAmountException::class);
        $drink = DrinkFactory::makeDrink('coffee');
        $drink->addSugars(4);
    }

    public function testNegativeSugar() 
    {
        $this->expectException(IncorrectSugarAmountException::class);
        $drink = DrinkFactory::makeDrink('coffee');
        $drink->addSugars(-5);
    }

    public function testIncorrectSugarInput() 
    {
        $this->expectException(TypeError::class);
        $drink = DrinkFactory::makeDrink('coffee');
        $drink->addSugars('f');
    }
}
