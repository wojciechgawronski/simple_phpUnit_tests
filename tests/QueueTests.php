<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    public function testNewQueueIsEmpty()
    {
        require_once 'src/Queue.php';

        $queue = new Queue;

        $this->assertEquals(0, $queue->getCount());
    }

    public function testAnItemIsAddedToTheQueue()
    {
        $queue = new Queue;
        
        $queue->push('woj');

        $this->assertEquals(1, $queue->getCount());
    }

    public function testAnItemIsRemoveFromTheQueue()
    {
        $queue = new Queue();

        $queue->push('gaw');

        $item = $queue->pop();
        
        $this->assertEquals(0, $queue->getCount());

        $this->assertEquals('gaw', $item);
    }
}