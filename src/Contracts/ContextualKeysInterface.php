<?php

namespace Upaid\ContextualKeys\Contracts;

interface ContextualKeysInterface
{
    public function setContext(string $context): void;

    public function setIdentifier(string $identifier): void;

    public function generateFullKey(string $key = ''): string;
}
