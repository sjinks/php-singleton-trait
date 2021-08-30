<?php

namespace WildWolf\Utils;

trait Singleton
{
    /** @var self|null */
    public static $instance = null;

    /**
     * @return static
     */
    public static function instance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {
        // Intentionally empty
    }

    /**
     * @codeCoverageIgnore
     */
    private function __clone()
    {
        // Intentionally empty
    }
}
