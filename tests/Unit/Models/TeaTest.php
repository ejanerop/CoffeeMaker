<?php

namespace Deliverea\CoffeeMachine\Tests\Unit\Console;

use Deliverea\CoffeeMachine\Factories\DrinkFactory;
use PHPUnit\Framework\TestCase;

class TeaTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
    }

    public function testDefaultMessage() {
        $drink = DrinkFactory::makeDrink('tea');
        $this->assertSame('You have ordered a tea' , $drink->getMessage());
    }
    
    
}
