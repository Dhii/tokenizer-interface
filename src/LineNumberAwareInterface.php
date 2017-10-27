<?php

namespace Dhii\Parser\Tokenizer;

/**
 * Something that can have a line number retrieved from it.
 *
 * @since [*next-version*]
 */
interface LineNumberAwareInterface
{
    /**
     * Retrieves the line number associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return int The line number.
     */
    public function getLineNumber();
}
