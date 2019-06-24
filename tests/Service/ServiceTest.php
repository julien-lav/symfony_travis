<?php

namespace App\Tests\Service;

use App\Service\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(2, 2);

        $this->assertEquals(4, $result);
    }
}
