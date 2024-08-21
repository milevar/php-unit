<?php

namespace Fixtures;

use DatabaseTrait;
use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\TestCase;
use ShoppingCartFixtureTrait;

#[CoversNothing]
class ShopingCartTestWithTraitsTest extends TestCase {

    use DatabaseTrait;
    use ShoppingCartFixtureTrait;

    public function testCorrectNumberOfItems(): void {
        $this->cart->addItem('one');
        $expected = 1;
        $result = $this->cart->amount;
        $this->assertEquals($expected, $result);
    }

    public function testCorrectProductName(): void {
        $this->cart->addItem('one');
        $this->assertContains('one', $this->cart->cartItems);
    }

}
