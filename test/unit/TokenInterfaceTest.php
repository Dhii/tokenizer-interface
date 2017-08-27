<?php

namespace Dhii\Parser\Tokenizer\UnitTest;

use Xpmock\TestCase;
use Dhii\Parser\Tokenizer\TokenInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since [*next-version*]
 */
class TokenInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Parser\\Tokenizer\\TokenInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TestSubject
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                // ColumnNumberAwareInterface
                ->getColumnNumber()
                // LineNumberAwareInterface
                ->getLineNumber()
                // ContainerInterface
                ->get()
                ->has()
                ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the test subject could not be created');
        $this->assertInstanceOf('Dhii\Data\Container\ContainerInterface', $subject, 'Subject does not implement required interface');
        $this->assertInstanceOf('Dhii\Parser\Tokenizer\LineNumberAwareInterface', $subject, 'Subject does not implement required interface');
        $this->assertInstanceOf('Dhii\Parser\Tokenizer\ColumnNumberAwareInterface', $subject, 'Subject does not implement required interface');
    }
}
