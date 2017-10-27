<?php

namespace Dhii\Parser\Tokenizer;

/**
 * Something that can have a token retrieved from it.
 *
 * @since [*next-version*]
 */
interface TokenAwareInterface
{
    /**
     * Retrieves the token associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return TokenInterface The token.
     */
    public function getToken();
}
