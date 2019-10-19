<?php


namespace DataStructures;


class Node
{
    /** @var string $item */
    private $item;
    /** @var Node|null  */
    private $next;

    public function __construct(string $item, ?Node $next = null)
    {
        $this->item = $item;
        $this->next = $next;
    }

    /**
     * @return string
     */
    public function getItem(): string
    {
        return $this->item;
    }

    /**
     * @return Node|null
     */
    public function getNext(): ?Node
    {
        return $this->next;
    }

    /**
     * @param Node|null $next
     */
    public function setNext(?Node $next): void
    {
        $this->next = $next;
    }
}