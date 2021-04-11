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
        if (empty($email)) {
            throw new Exception;
        }

        // simulate PHPMailer or mail()
        sleep(3);

        // echo "Send{$message} tp {$email}";
        echo "send '$message' to '$email'";

        return true;
    }
}
