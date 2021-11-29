<?php

namespace ilhamhmmd\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    /**
     * @test
     */
    public function increment()
    {
        $counter = new Counter();
        
        $counter->increment();
        $this->assertEquals(1, $counter->getCounter());
    }

    public function testCounter()
    {
        $counter = new Counter();
        
        $counter->increment();
        $this->assertEquals(1, $counter->getCounter());
    }
}
