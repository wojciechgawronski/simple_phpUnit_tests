<?php

use PHPUnit\Framework\TestCase;

/**
 * Its best practice tests each method whitout dependeNcy
 * So.. tests should be more independent.. and its easier to follow what is going on... ;)
 */
class QueueTest extends TestCase
{
    protected static $queue;

    /**
     * Sth like fixtures, execute before each method
     */
    public function setUp() : void
    {
        static::$queue->clear();
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
        require_once 'src/Queue.php';

        static::$queue = new Queue();
    }

    /**
     * this method executed ONCE after class
     */
    public static function tearDownAfterClass() : void
    {
        // just examle, but... what if it is a database connection ?
        // YOU SHOULD CLOSE A DATABASE CONN
        static::$queue = null;
    }

    public function testNewQueueuIsEmpty()
    {
        $this->assertEquals(0, static::$queue->getCount());
    }

    public function testAnItemIsAddedToTheQueue()
    {
        static::$queue->push('woj');

        $this->assertEquals(1, static::$queue->getCount());
    }
    
    public function testAnItemIsRemoveFromTheQueue()
    {
        static::$queue->push('gaw');

        $item = static::$queue->pop();

        static::$queue->pop();
        
        $this->assertEquals(0, static::$queue->getCount());

        $this->assertEquals('gaw', $item);
    }

    public function testAnItemIsRemovedFromTheEndOfTheQueueu()
    {
        static::$queue->push('first');
        static::$queue->push('second');

        $this->assertEquals('first', static::$queue->pop());
    }
}
