<?php

namespace Sensche;

/**
 * Representation of word
 */
class SentenceWord
{
    protected $word = null;

    public function __construct($word = null)
    {
        $this->word = $word;
    }

    public function getWord()
    {
        return $this->word;
    }

    public function __toString()
    {
        return $this->getWord();
    }

}
