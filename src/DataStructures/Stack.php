<?php


namespace DataStructures;


/**
 * Class Stack
 * @package DataStructures
 */
class Stack extends Sequence
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

    protected function getFirst(): ?Node
    {
        return $this->last;
    }
}