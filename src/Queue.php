<?php

/**
 * Simple Data Structure
 * First Im First Out
 * Flow: Enqueue (Add) // Back ... Front // Dequeue (Remowe)
 */
class Queue
{
    protected array $items = [];

    public const MAX_ITEMS = 5;

    /**
     * Add item to the end of the queue
     *
     * @throws QueueException
     */
    public function push(mixed $item) : void
    {
        if ($this->getCount() == static::MAX_ITEMS) {
            throw new QueueException("Queue is full");
        }
        $this->items[] = $item;
    }

    /**
     * Take an item of the head of the queue
     */
    public function pop() : mixed
    {
        return array_shift($this->items);
    }

    /**
     * Get the total number of items in the queue
     */
    public function getCount() : int
    {
        return count($this->items);
    }

    public function clear()
    {
        $this->items = [];
    }
}
