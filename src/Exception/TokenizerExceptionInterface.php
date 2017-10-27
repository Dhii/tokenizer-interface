<?php

namespace Dhii\Parser\Tokenizer\Exception;

use Dhii\Parser\Tokenizer\TokenizerAwareInterface;
use Dhii\Exception\ThrowableInterface;

/**
 * An exception that occurs in relation to a tokenizer.
 *
 * @since [*next-version*]
 */
interface TokenizerExceptionInterface extends
        ThrowableInterface,
        TokenizerAwareInterface
{
}
