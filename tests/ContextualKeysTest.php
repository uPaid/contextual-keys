<?php

namespace Upaid\ContextualKeys\Tests;

use PHPUnit\Framework\TestCase;

class ContextualKeysTest extends TestCase
{
    /**
     * @test
    */
    public function it_generates_key_properly()
    {
        $dummyClass = new DummyClass();

        $dummyClass->setContext('context');
        $dummyClass->setIdentifier('id');

        $this->assertEquals('Upaid\ContextualKeys\Tests\DummyClass_context_id_key', $dummyClass->generateFullKey('key'));
    }
}
