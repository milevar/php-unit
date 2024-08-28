<?php

namespace forStubMockTesting;

use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\TestCase;

#[CoversNothing]
class ProductMockTest extends TestCase {
    public function testSaveProduct()
    {

        // $loggerMock = $this->getMockBuilder(Logger::class)
        // ->disableOriginalConstructor()
        // ->setMethods(['log'])
        // ->getMock();

        $loggerMock = $this->createMock(Logger::class);
        $loggerMock->expects($this->once()) // $this->never()
        ->method('log')
            ->with(
                $this->equalTo('error'),
                $this->anything()
            );

        $product = new Product($loggerMock);
        $product->saveProduct('Panasonic', 'price');

    }

    public function testSaveProductTwo()
    {
        $loggerMock = $this->createMock(Logger::class);
        $loggerMock->expects($this->exactly(2))
            ->method('log')
            ->withConsecutive(
                [$this->equalTo('notice'), $this->stringContains('greater than 10')],
                [$this->equalTo('success'), $this->stringContains('was saved')],
            );

        $product = new Product($loggerMock);
        $product->saveProduct('Panasonic', 11);

    }
}
