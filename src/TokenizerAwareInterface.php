<?php

namespace Dhii\Parser\Tokenizer;

/**
 * Something that can have a tokenizer retrieved from it.
 *
 * @since [*next-version*]
 */
interface TokenizerAwareInterface
{
    /**
     * Retrieves the tokenizer associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return TokenizerInterface The tokenizer.
     */
    public function getTokenizer();
}
