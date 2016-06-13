<?php

namespace Sensche;

/**
 * Scheme of sentence
 */
class SentenceScheme
{
    /**
     * @var string
     */
    protected $sentence;

    /**
     * @var SentenceNode
     */
    protected $root;

    public function __construct($sentence, SentenceNode $root)
    {
        $this->sentence = $sentence;
        $this->root = $root;
    }

}
