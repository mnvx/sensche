<?php

namespace Sensche;

/**
 * Parse scheme of sentence
 */
class SentenceParser implements ParseSentenceSchemeInterface
{
    /**
     * {@inheritdoc}
     */
    public function parse($sentence)
    {
        $root = null;
        $scheme = new SentenceScheme($sentence, $root);

        // @todo

        return $scheme;
    }
}
