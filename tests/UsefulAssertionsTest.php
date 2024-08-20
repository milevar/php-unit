<?php


use PHPUnit\Framework\TestCase;

class UsefulAssertionsTest extends TestCase {
    public function testAssertSame() {
        $expected = 'expected';
        $result = 'EXPECTED';

        $this->assertSame($expected, $result);
    }

    public function testAssertEquals() {
        $expected = 1;
        $result = 2;

        $this->assertEquals($expected, $result);
    }

    public function testAssertEmpty() {

        $this->assertEmpty(['Foo']);
    }

    public function testAssertNull() {

        $this->assertNull(['Foo']);
    }

    public function testAssertGreaterThan() {
        $expected = 3;
        $actual = 2;

        $this->assertGreaterThan($expected, $actual);
    }

    public function testAssertFalse() {

        $this->assertFalse(true);
    }
    public function testAssertTrue() {

        $this->assertTrue(false);
    }

    public function testAssertCount() {

        $this->assertCount(3, [1,2]);
    }

    public function testAssertContains() {

        $this->assertContains(3, [1,2]);
    }

    public function testAssertContainsString() {
        $searchFor = 'foo';
        $searchIn = 'baz';

        $this->assertStringContainsString($searchFor, $searchIn);
    }

}
