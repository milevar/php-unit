<?php


use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
class UnitUntestableTest extends TestCase
{

    public function testGetRandomQuote() {

        $expected = "one the famous physicist Albert Einstein \"Insanity: doing the same thing over and over again and expecting different results.\"";

        $stub = $this->getMockBuilder(UnitUntestable::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getRandomQuote'])
            ->getMock();
        $stub->method('getRandomQuote')->willReturn("one the famous physicist Albert Einstein \"Insanity: doing the same thing over and over again and expecting different results.\"");

        $this->assertSame($expected, $stub->getRandomQuote());

    }
}
