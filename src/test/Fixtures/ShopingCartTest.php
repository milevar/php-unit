<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

class ShopingCartTest extends TestCase {

    protected $cart;

    protected function setUp(): void {
        $this->cart = new ShopingCart;
    }

    protected function tearDown(): void {
        unset($this->cart);
    }

    #[Test]
    public function testCorrectNumberOfItems() {
        $this->cart->addItem('one');
        $expected = 1;
        $result = $this->cart->amount;
        $this->assertEquals($expected, $result);
    }

}
