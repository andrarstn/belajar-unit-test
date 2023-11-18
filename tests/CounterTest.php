<?php

namespace Andrarstn\BelajarUnitTest;

use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    private Counter $counter;

    protected function setUp(): void
    {
        $this->counter = new Counter();
        echo "Membuat Counter" . PHP_EOL;
    }

    public function testCounter()
    {
        $this->counter->increment();
        
        $this->assertEquals(1, $this->counter->getCounter());
    }

    /** 
     * @test
    */

    public function increment()
    {
        $this->counter->increment();
        $this->counter->increment();
        $this->counter->increment();
        
        $this->assertEquals(3, $this->counter->getCounter());
    }

    public function testFirst() : Counter 
    {
        $this->counter->increment();

        $this->assertEquals(1, $this->counter->getCounter());

        return $this->counter;
    }

    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter) : void
    {
        $counter->increment();

        $this->assertEquals(2, $counter->getCounter());
    }

    protected function tearDown(): void
    {
        echo "Tear Down". PHP_EOL;
    }

    /**
     * @after
     */
    protected function after(): void
    {
        echo "After". PHP_EOL;
    }
}