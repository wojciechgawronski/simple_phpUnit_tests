<?php

/**
 * Simple Data Structure
 * First Im First Out
 * Flow: Enqueue (Add) // Back ... Front // Dequeue (Remowe)
 */
class Queue
{
    protected array $items = [];

    /**
     * Add item to the end of the queue
     */
    public function push(mixed $item) : void
    {
        $this->items[] = $item;
    }

    /**
     * Take an item of the head of the queue
     */
    public function pop() : mixed
    {
        return array_pop($this->items);
    }

    /**
     * Get the total number of items in the queue
     */
    public function getCount() : int
    {
        return count($this->items);
    }
}
