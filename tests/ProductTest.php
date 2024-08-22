<?php


use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
class ProductTest extends TestCase {
   public function testProduct() {
       //$product = new Product(new Session());

       $session = new class implements SessionInterface {
           public function open() {}
           public function close() {}

           public function write($product) {
               echo "mocked writing ... " . $product;
           }


       };

       $product = new Product($session);
       $this->assertSame('Product 1', $product->fetchProductById(1));
   }
}
