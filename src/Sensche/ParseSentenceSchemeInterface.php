<?php

namespace Sensche;

/**
 * Interface for parser of sentence scheme
 */
interface ParseSentenceSchemeInterface
{
    /**
     * SentenceScheme
     * @param string $sentence
     */
    public function parse($sentence);
}
