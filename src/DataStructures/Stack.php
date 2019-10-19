<?php


namespace DataStructures;


/**
 * Class Stack
 * @package DataStructures
 */
class Stack
{
    /** @var Node */
    private $last;

    /**
     * Stack constructor.
     */
    public function __construct()
    {
        $this->last = null;
    }

    public function put(string $item): void
    {
        $this->last = new Node($item, $this->last);
    }

    public function get(): string
    {
        if ($this->isEmpty()) {
            return null;
        }
        $item = $this->last->getItem();
        $this->last = $this->last->getNext();
        return $item;
    }

    public function isEmpty()
    {
        return $this->last == null;
    }
}