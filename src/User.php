<?php declare(strict_types=1);

class User
{
    // zainicjowanie zmiennych przed inicjalizacja obiektu na potrzeby testow, php8
    public string $firstName = '';
    public string $lastName = '';
    public string $email;

    public function getFullName() : string
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function notify( string $message)
    {
        include_once 'src/Mailer.php';

        $mailer = new Mailer();

        return $mailer->sendMessage($this->email, $message);
    }
}


/*

die($baseDir . "\n"); // /var/www/html/tescik

die($vendorDir . "\n"); /var/www/html/tescik/vendor



die($baseDir . "/src" . "\n");  /var/www/html/tescik/src
*/
