<?php

namespace Andrarstn\BelajarUnitTest;

use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    public function testCounter()
    {
        $counter = new Counter();
        $counter->increment();
        
        $this->assertEquals(1, $counter->getCounter());
    }

    /** 
     * @test
    */

    public function increment()
    {
        $counter = new Counter();
        $counter->increment();
        $counter->increment();
        $counter->increment();
        
        $this->assertEquals(3, $counter->getCounter());
    }

    public function testFirst() : Counter 
    {
        $counter = new Counter();
        $counter->increment();

        $this->assertEquals(1, $counter->getCounter());

        return $counter;
    }

    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter) : void
    {
        $counter->increment();

        $this->assertEquals(2, $counter->getCounter());
    }
}