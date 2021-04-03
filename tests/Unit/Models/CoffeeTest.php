<?php

namespace Deliverea\CoffeeMachine\Tests\Unit\Console;

use Deliverea\CoffeeMachine\Factories\DrinkFactory;
use PHPUnit\Framework\TestCase;

class CofeeTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
    }

    public function testDefaultMessage() {
        $drink = DrinkFactory::makeDrink('coffee');
        $this->assertSame('You have ordered a coffee' , $drink->getMessage());
    }

}
