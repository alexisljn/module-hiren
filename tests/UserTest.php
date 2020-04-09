<?php


namespace Test;


use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testIsValid()
    {
        $this->assertTrue((new User('Popo', 'Johnny', 'jojo@adventure.jp', 10))->isValid());
    }
}