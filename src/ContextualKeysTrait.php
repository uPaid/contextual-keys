<?php

namespace Upaid\ContextualKeys;

trait ContextualKeysTrait
{
    /**
     * @var string
     */
    protected $context;
    protected $identifier;

    public function setContext(string $context): void
    {
        $this->context = $context;
    }

    public function setIdentifier(string $id): void
    {
        $this->identifier = $id;
    }

    /**
     * all examples below are in context of storage keys
     *
     * generate a full contextual key consisting of:
     * - caller class name (so in theory the same storage object must read and write this value)
     * - context (for example PROFILE_EMAIL_CHANGE or PASSWORD_RESET)
     * - identifier (usually phone number of a given user)
     * - key (any additional information)
     * @param string $key
     * @return string
    */
    public function generateFullKey(string $key = ''): string
    {
        if (!$this->context || !$this->identifier) {
            throw new \InvalidArgumentException('You have to run setContext and setIdentifier methods first');
        }

        return implode('_', [
            static::class,
            $this->context,
            $this->identifier,
            $key,
        ]);
    }
}
