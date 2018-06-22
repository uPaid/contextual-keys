<?php

namespace Upaid\ContextualKeys\Tests;

use Upaid\ContextualKeys\ContextualKeysTrait;
use Upaid\ContextualKeys\Contracts\ContextualKeysInterface;

class DummyClass implements ContextualKeysInterface
{
    use ContextualKeysTrait;
}
