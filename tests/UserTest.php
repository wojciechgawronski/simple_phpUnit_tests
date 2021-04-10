<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testTestu()
    {
        $this->assertEquals('', '');
    }

    public function testFullName()
    {
        require 'class/UserClass.php';

        $user = new UserClass();
        $user->firstName = 'woj';
        $user->lastName = 'gaw';

        $this->assertEquals('woj gaw', $user->getFullName());
    }

}