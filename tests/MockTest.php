<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    public function testMock()
    {
        require_once 'src/Mailer.php';

        // $mailer = new Mailer();
        // create a Mock!, mockObject contains all propoerties as orginal
        $mock = $this->createMock(Mailer::class);

        // $result = $mailer->sendMessage('woj@gaw', 'Hello!');
        $result = $mock->sendMessage('woj@gaw', 'Hello!');

        var_dump($result);
    }
}
