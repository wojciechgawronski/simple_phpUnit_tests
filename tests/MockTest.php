<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    public function testMock()
    {
        require_once 'src/Mailer.php';

        // $mailer = new Mailer();
        // create a Mock!, to remove the dependiences; mockObject contains all propoerties as orginal
        $mock = $this->createMock(Mailer::class);

        $mock->method('sendMessage')
        ->willReturn(true);

        // $result = $mailer->sendMessage('woj@gaw', 'Hello!');
        $result = $mock->sendMessage('woj@gaw', 'Hello!');

        // var_dump($result);
        $this->assertTrue($result);
    }
}
