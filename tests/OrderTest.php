<?php

use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    public function testOrderIsProcess()
    {
        // error: class or Interface does nor exists!
        // $gateway = $this->createMock('PaymentGateway');
        $gateway = $this->getMockBuilder('PaymentGateway')
                    ->setMethods(['charge'])
                    ->getMock();

        // configure the charge method
        $gateway->expects($this->once())
                    ->method('charge')
                    ->with($this->equalTo(200))
                    ->willReturn(true);

        require_once 'src/Order.php';

        $order = new Order($gateway);

        $order->amount = 200;

        $this->assertTrue($order->process());
    }

}