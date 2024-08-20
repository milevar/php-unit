<?php

use PHPUnit\Framework\TestCase;

class BMICalculatorTest extends TestCase {

    public function testBMICalculate() {
        $BMICalculator = new BMICalculator();
        $BMICalculator->mass = 85;
        $BMICalculator->height = 1.55;
        $result = $BMICalculator->calculate();
        $expected = 35.4;
        $this->assertEquals($expected, $result);
    }

    public function testUnderWeightBMITextResult() {
        $BMICalculator = new BMICalculator();
        $BMICalculator->BMI = 10;
        $result = $BMICalculator->getTextResultFromBMI();
        $expected = 'Underweight';
        $this->assertSame($expected, $result);
    }

    public function testNormalWeightBMITextResult() {
        $BMICalculator = new BMICalculator();
        $BMICalculator->BMI = 24;
        $result = $BMICalculator->getTextResultFromBMI();
        $expected = 'Normal';
        $this->assertSame($expected, $result);
    }

    public function testOverWeightBMITextResult() {
        $BMICalculator = new BMICalculator();
        $BMICalculator->BMI = 38;
        $result = $BMICalculator->getTextResultFromBMI();
        $expected = 'Overweight';
        $this->assertSame($expected, $result);
    }

}
