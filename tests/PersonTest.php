<?php

namespace Andrarstn\BelajarUnitTest;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testSuccess()
    {
        $person = new Person("Andra");
        self::assertEquals("Hello Ris, my name is Andra", $person->sayHello('Ris'));
    }

    public function testException()
    {
        $person = new Person("Andra");
        $this->expectException(\Exception::class);
        $person->sayHello(null);
    }

    public function testGoodByeSuccess()
    {
        $person = new Person("Andra");
        $this->expectOutputString("Good bye Ris".PHP_EOL);
        $person->sayGoodBye("Ris");
    }
}