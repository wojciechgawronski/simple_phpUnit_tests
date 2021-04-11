<?php

use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    public function testOrderIsProcessxxx()
    {
        $gateway = $this->createMock(PaymentGateway::class);

        require_once 'src/Order.php';

        $order = new Order($gateway, 3, 1.99);

        $this->assertEquals(5.97, $order->amount);
    }
    
    public function testOrderIsProcess()
    {
        $gateway = $this->getMockBuilder('PaymentGateway')
                    ->setMethods(['charge'])
                    ->getMock();

        // configure the charge method
        $gateway->expects($this->once())
                    ->method('charge')
                    ->with($this->equalTo(200))
                    ->willReturn(true);

        require_once 'src/Order.php';

        $order = new Order($gateway, 3, 1.99);

        $order->amount = 200;

        $this->assertTrue($order->process());
    }
}
