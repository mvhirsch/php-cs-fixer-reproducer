<?php

namespace App;

use PHPUnit\Framework\TestCase;

final class Foo
{
    /**
     * @return \Generator<array{0: array<mixed>, 1: string}>
     */
    public static function fixturesProvider(): \Generator
    {
        yield [['foo'], '123'];
        yield [['bar'], '456'];
    }
}
