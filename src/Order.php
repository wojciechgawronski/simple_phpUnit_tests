<?php

/**
 * Am example order class
 */
class Order
{
    public int $amount = 0;

    /**
     * paymrnt gateway dependency
     */
    protected PaymentGateway $gateway;

    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->gateway = $paymentGateway;
    }

    public function process() : bool
    {
        return $this->gateway->charge($this->amount);
    }
}