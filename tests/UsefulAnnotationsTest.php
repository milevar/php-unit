<?php

use PHPUnit\Framework\Attributes\CoversNothing;
use \PHPUnit\Framework\Attributes\Before;
use PHPUnit\Framework\TestCase;

#[CoversNothing]
class UsefulAnnotationsTest extends TestCase {
    private $value;

    #[Before]
    public function runBeforeEachTestMethod() {
        $this->value = 1;
    }

        public function test1() {
        $this->value++;
        $expected = 2;
        $result = $this->value;
        $this->assertEquals($expected, $result);
    }

        public function testAnnotations2() {
        $this->value++;
        $expected = 2;
        $result = $this->value;
        $this->assertEquals($expected, $result);

    }
}
