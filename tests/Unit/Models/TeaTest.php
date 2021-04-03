<?php

namespace Deliverea\CoffeeMachine\Tests\Unit\Console;

use Deliverea\CoffeeMachine\Exceptions\IncorrectSugarAmountException;
use Deliverea\CoffeeMachine\Factories\DrinkFactory;
use PHPUnit\Framework\TestCase;
use TypeError;

class TeaTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
    }

    public function testDefaultMessage() 
    {
        $drink = DrinkFactory::makeDrink('tea');
        $this->assertSame('You have ordered a tea' , $drink->getMessage());
    }
    
    
    public function testExtraHotMessage() 
    {
        $drink = DrinkFactory::makeDrink('tea');
        $drink->warm(true);
        $this->assertSame('You have ordered a tea extra hot' , $drink->getMessage());
    }

    public function testSweetedMessage() 
    {
        $drink = DrinkFactory::makeDrink('tea');
        $drink->addSugars(1);
        $this->assertSame('You have ordered a tea with 1 sugars (stick included)' , $drink->getMessage());
    }

    public function testTooMuchSugar() 
    {
        $this->expectException(IncorrectSugarAmountException::class);
        $drink = DrinkFactory::makeDrink('tea');
        $drink->addSugars(4);
    }

    public function testNegativeSugar() 
    {
        $this->expectException(IncorrectSugarAmountException::class);
        $drink = DrinkFactory::makeDrink('tea');
        $drink->addSugars(-5);
    }

    public function testIncorrectSugarInput() 
    {
        $this->expectException(TypeError::class);
        $drink = DrinkFactory::makeDrink('tea');
        $drink->addSugars('f');
    }
}
