<?php


use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
class CalculatorTest extends TestCase {

    protected $calculator;
    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    protected function tearDown(): void
    {
        unset($this->calculator);
    }
    public function testAdd() {
        $expected = 5;
        $result = $this->calculator->add(3, 2);
        $this->assertEquals($expected, $result);
    }

    public function testSubtract() {
        $expected = 3;
        $result = $this->calculator->subtract(8, 5);
        $this->assertEquals($expected, $result);
    }

    public function testMultiply() {
        $expected = 6;
        $result = $this->calculator->multiply(3, 2);
        $this->assertEquals($expected, $result);
    }

    public function testDivide() {
        $expected = 2;
        $result = $this->calculator->divide(6, 3);
        $this->assertEquals($expected, $result);
    }
}
