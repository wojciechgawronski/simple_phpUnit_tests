<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{

    /**
     * Producer
     */
    public function testNewQueueuIsEmpty() : Queue
    {
        require_once 'src/Queue.php';

        $queue = new Queue;

        $this->assertEquals(0, $queue->getCount());

        return $queue;
    }

    /**
     * @depends testNewQueueuIsEmpty
     * Consumer - because depends on Producer
     */
    public function testAnItemIsAddedToTheQueue(Queue $queue)
    {
        $queue->push('woj');

        $this->assertEquals(1, $queue->getCount());

        return $queue;
    }

    /**
     * @depends testNewQueueuIsEmpty
     */
    public function testAnItemIsRemoveFromTheQueue(Queue $queue)
    {
        $queue->push('gaw');

        $item = $queue->pop();

        $queue->pop();
        
        $this->assertEquals(0, $queue->getCount());

        $this->assertEquals('gaw', $item);
    }
}
