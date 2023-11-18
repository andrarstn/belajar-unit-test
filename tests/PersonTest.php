<?php

namespace Andrarstn\BelajarUnitTest;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    private Person $person;

    // protected function setUp(): void
    // {
    //     $this->person = new Person("Andra");
    // }

    /**
     * @before
     */
    protected function createPerson(): void
    {
        $this->person = new Person("Andra");
    }

    public function testSuccess()
    {
        self::assertEquals("Hello Ris, my name is Andra", $this->person->sayHello('Ris'));
    }

    public function testException()
    {
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    public function testGoodByeSuccess()
    {
        $this->expectOutputString("Good bye Ris".PHP_EOL);
        $this->person->sayGoodBye("Ris");
    }
}