<?php

use PHPUnit\Framework\TestCase;

/**
 * Its best practice tests each method whitout dependeNcy
 * So.. tests should be more independent.. and its easier to follow what is going on... ;)
 */
class QueueTest extends TestCase
{
    protected $queue;

    /**
     * Sth like fixtures, execute before each method
     */
    public function setUp() : void
    {
        require_once 'src/Queue.php';

        $this->queue = new Queue();
    }

    /**
     * This method run after each test...
     * In this case it provides to produce a lot of object..
     * and this used a lot of Memory.. :(
     *
     * It should be used to external resources like opening new network socked
     * or creating new file
     */
    protected function tearDown() : void
    {
        unset($this->queue);
    }

    /**
     * this method execute once before class
     * usfull to connect to Database or share fixtures between tests method
     */
    public static function setUpBeforeClass() : void
    {

    }

    /**
     * this method executed ONCE after class
     */
    public static function tearDownAfterClass(): void
    {
        
    }

    public function testNewQueueuIsEmpty()
    {
        $this->assertEquals(0, $this->queue->getCount());
    }

    public function testAnItemIsAddedToTheQueue()
    {
        $this->queue->push('woj');

        $this->assertEquals(1, $this->queue->getCount());
    }
    
    public function testAnItemIsRemoveFromTheQueue()
    {
        $this->queue->push('gaw');

        $item = $this->queue->pop();

        $this->queue->pop();
        
        $this->assertEquals(0, $this->queue->getCount());

        $this->assertEquals('gaw', $item);
    }

    public function testAnItemIsRemovedFromTheEndOfTheQueueu()
    {
        $this->queue->push('first');
        $this->queue->push('second');

        $this->assertEquals('first', $this->queue->pop());
    }
}
