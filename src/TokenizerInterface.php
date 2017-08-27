<?php

namespace Dhii\Parser\Tokenizer;

use Dhii\Iterator\IteratorInterface;

/**
 * Something that represents a stream of tokens.
 * 
 * The stream comes in the form of an iterator. When the tokenizer encounters
 * a token, it stops, and the token data is made available via the iteration.
 *
 * @since [*next-version*]
 */
interface TokenizerInterface extends IteratorInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return TokenizerIterationInterface The iteration.
     */
    public function getIteration();
}
