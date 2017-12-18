<?php

namespace Tests;

use Mockery;
use Redis;
use Codeception\Test\Unit;

class RedisSegmentationFaultTest extends Unit
{
    public function setUp()
    {
        Mockery::mock(Redis::class);
    }

    public function testExample()
    {
        $this->assertTrue(true);
    }
}
