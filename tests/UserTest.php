<?php declare(strict_types=1);

// require_once 'vendor/autoload.php';
// use PhpParser\Builder\Use_;
// use src\User;
use PHPUnit\Framework\TestCase;

require_once 'vendor/composer/autoload_psr4.php';

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
        require 'src/User.php';

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
        $this->assertEquals(' ', $user->getFullName());
    }

    public function testNotificationIsSent()
    {
        include_once 'src/Mailer.php';
        
        $user = new User();
        
        $mockMailer = $this->createMock(Mailer::class);

        $user->setMailer($mockMailer);

        $mockMailer
            ->expects($this->once()) // how many times do... here: notify, ed never
            ->method('sendMessage')
            ->with($this->equalTo('woj@gaw**'), $this->equalTo('Helloo***'))
            ->willReturn(true);

        $user->email = 'woj@gaw**';

        $this->assertTrue($user->notify('Helloo***'));
    }

    public function testCannotEmptyNotificationUserByEmail()
    {
        $user = new User;

        // instead of this:
        // $mockMailer = $this->createMock(Mailer::class);
        // $mockMailer
        //     ->method('sendMessage')
        //     ->will($this->throwException(new Exception));
        // do this:

        $mockMailer = $this->getMockBuilder(Mailer::class)
                            ->setMethods(null)
                            ->getMock();

        $user->setMailer($mockMailer);

        $this->expectException(Exception::class);

        $user->notify('Hello');
    }
}
