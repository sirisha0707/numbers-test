<?php

use PHPUnit\Framework\TestCase;

class NumberGeneratorTest extends TestCase
{
    public function testNumberPrintSuccess(): void
    {
        $this->assertEquals(
            'Linio 4 IT Linio 7 8 Linio IT ',
            NumberGenerator::numberPrint(3, 10)
        );
    }
}
