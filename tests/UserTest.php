<?php declare(strict_types=1);

use PhpParser\Builder\Use_;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * assertcja ekłils
     */
    public function testTestu()
    {
        $this->assertEquals('', '');
    }

    /**
     * @test
     * asercja true
     */
    public function isTestTrue()
    {
        $this->assertTrue(true);
    }

    public function testFullName()
    {
        require 'class/User.class.php';

        $user = new User();
        $user->firstName = 'woj';
        $user->lastName = 'gaw';

        $this->assertEquals('woj gaw', $user->getFullName());
    }

    /**
     * @test
     */
    public function userHasFirstName()
    {
        $user = new User();

        $user->firstName = 'woj';

        $this->assertEquals('woj', $user->firstName);
        $this->assertEquals('woj', $user->firstName);
    }

    public function testFullNameIsEmptyByDefault()
    {
        $user = new User();
        $this->assertEquals('', $user->getFullName());
    }
}
