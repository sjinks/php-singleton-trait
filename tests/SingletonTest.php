<?php

namespace WildWolf\Test;

use PHPUnit\Framework\TestCase;
use ReflectionClass;

class SingletonTest extends TestCase
{
    /**
     * @covers \WildWolf\Utils\Singleton::instance
     * @covers \WildWolf\Utils\Singleton::__construct
     */
    public function testInstanceDifferentClasses(): void
    {
        $classA = ClassA::instance();
        $classB = ClassB::instance();
        self::assertNotSame($classA, $classB);
    }

    /**
     * @covers \WildWolf\Utils\Singleton::instance
     * @covers \WildWolf\Utils\Singleton::__construct
     */
    public function testInstanceSameClass(): void
    {
        $class1 = ClassA::instance();
        $class2 = ClassA::instance();
        self::assertSame($class1, $class2);
    }

    /**
     * @coversNothing
     */
    public function testNotCloneable(): void
    {
        $class = new ReflectionClass(ClassA::class);
        self::assertFalse($class->isCloneable());
    }
}
