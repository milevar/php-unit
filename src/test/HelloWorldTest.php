<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

class HelloWorldTest extends TestCase {

    #[Test]
    public function testTrue(): void
    {
        $this->assertTrue(true);
    }

    #[Test]
    public function testFalse(): void
    {
        $this->assertFalse(false);
    }
}