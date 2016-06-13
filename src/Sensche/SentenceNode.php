<?php

namespace Sensche;

/**
 * Node of sentence
 */
class SentenceNode
{
    /**
     * @var SentenceWord
     */
    protected $word = null;

    /**
     * @var SentenceNode
     */
    protected $parent = null;

    /**
     * @var SentenceNode[]
     */
    protected $children = [];

    public function __construct(SentenceWord $word = null, SentenceNode $parent = null)
    {
        $this->word = $word;
        $this->parent = $parent;
    }

    /**
     * @return SentenceNode[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param SentenceNode[] $children
     * @return SentenceNode
     */
    public function setChildren(array $children)
    {
        $this->children = $children;
        return $this;
    }

    /**
     * @param SentenceNode $child
     * @return SentenceNode
     */
    public function addChild(SentenceNode $child)
    {
        $this->children[] = $child;
        return $this;
    }

}
