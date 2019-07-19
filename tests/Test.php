<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    public function testCanCalculateSumOfOnePlusOne(): void
    {
        $this->assertEquals(
            2,
            1+1
        );
    }
}


