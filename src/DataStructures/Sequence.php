<?php


namespace DataStructures;


abstract class Sequence
{
    abstract public function put(string $item): void;
    abstract public function get(): ?string;
    abstract protected function getFirst(): ?Node;

    public function isEmpty() : bool
    {
        return $this->getFirst() === null;
    }

    public function getList(): iterable
    {
        $current = $this->getFirst();
        while ($current !== null) {
            yield $current->getItem();
            $current = $current->getNext();
        }
    }
}