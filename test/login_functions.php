<?php

require('../session.php');

use PHPUnit\Framework\Testcase;

class FunctionsTests extends Testcase
{
    public $ = [
        ['id' => 1,
            'title' => 'test'],
    ];

    public function test_callRow_Success()
    {
        $callRow = callRow($this->items);
        $this->assertContains('<select name="id"><option value="1">test</option>', $callRow);
    }

    public function test_callRow_fail_badArray()
    {
        $items = [
            ['foo' => 1,
                'bar' => 'test'],
        ];
        $callRow = callRow($items);
        $this->assertFalse($callRow);
    }

    public function test_callRow_malformed()
    {
        $items = 'string';
        $this->expectException(TypeError::class);
        $callRow = callRow($items);
    }
}
