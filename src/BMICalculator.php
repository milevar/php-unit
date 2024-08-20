<?php
class BMICalculator {

    public float $mass;
    public float $height;
    public float $BMI;

    public function calculate(): float
    {
        //if ($this->mass <= 0 || $this->height <= 0) throw new WrongBmiDataException('error message');
        return round($this->mass / pow($this->height, 2), 1);
    }

    public function getTextResultFromBMI(): string
    {
        if ($this->BMI < 18)
            return 'Underweight';
        elseif ($this->BMI <= 25)
            return 'Normal';
        else
            return 'Overweight';
    }
}
