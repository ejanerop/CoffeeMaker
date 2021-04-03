<?php

namespace Deliverea\CoffeeMachine\Tests\Unit\Console;

use Deliverea\CoffeeMachine\Factories\DrinkFactory;
use PHPUnit\Framework\TestCase;

class ChocolateTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
    }

    public function testDefaultMessage() {

        $drink = DrinkFactory::makeDrink('chocolate');
        $this->assertSame('You have ordered a chocolate' , $drink->getMessage());
    }


}
