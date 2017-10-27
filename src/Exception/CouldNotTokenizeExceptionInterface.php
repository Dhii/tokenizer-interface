<?php

namespace Dhii\Parser\Tokenizer\Exception;

use Dhii\Parser\Tokenizer\LineNumberAwareInterface;
use Dhii\Parser\Tokenizer\ColumnNumberAwareInterface;

/**
 * An exception that occurs when a tokenizer fails to produce a token.
 *
 * @since [*next-version*]
 */
interface CouldNotTokenizeExceptionInterface extends
        TokenizerExceptionInterface,
        LineNumberAwareInterface,
        ColumnNumberAwareInterface
{
}
