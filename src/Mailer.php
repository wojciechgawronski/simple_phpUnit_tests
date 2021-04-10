<?php declare(strict_types=1);

/**
 * Mailer
 *
 * Send messages
 */
class Mailer
{

    /**
     * @param string $email
     * @param string $message
     * @return boolean true if sent, false otherweise
     */
    public function sendMessage(string $email, string $message): bool
    {
        // simulate PHPMailer or mail()
        sleep(3);

        echo "Send{$message} tp {$email}";

        return true;
    }
}
