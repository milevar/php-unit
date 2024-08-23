<?php


use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
class ProductAbstractTest extends TestCase {
    public function testProductAbstract() {
        $productAbstract = new class extends ProductAbstract {};
        $this->assertSame('Done !!!', $productAbstract->doSomething());
    }

}
