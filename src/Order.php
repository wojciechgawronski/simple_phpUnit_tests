<?php

/**
 * Am example order class
 */
class Order
{
    public float $amount = 0;
    public float $unitPrice;
    public int $quantity;

    /**
     * payment gateway dependency
     */
    protected PaymentGateway $gateway;

    public function __construct(PaymentGateway $paymentGateway, int $quantity, float $unitPrice)
    {
        $this->gateway = $paymentGateway;
        $this->amount = $quantity * $unitPrice;
    }

    public function process() : bool
    {
        return $this->gateway->charge($this->amount);
    }
}
