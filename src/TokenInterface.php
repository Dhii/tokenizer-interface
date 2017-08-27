<?php

namespace Dhii\Parser\Tokenizer;

use Dhii\Data\Container\ContainerInterface;

/**
 * Represents a token.
 *
 * A token is a piece of data at a specific location. It has domain-specific
 * data attached to it.
 *
 * @since [*next-version*]
 */
interface TokenInterface extends
        ContainerInterface,
        LineNumberAwareInterface,
        ColumnNumberAwareInterface
{
}
