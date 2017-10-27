<?php

namespace Dhii\Parser\Tokenizer;

/**
 * Something that can have a column number retrieved from it.
 *
 * @since [*next-version*]
 */
interface ColumnNumberAwareInterface
{
    /**
     * Retrieves the column number associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return int The 1-based column number.
     */
    public function getColumnNumber();
}
