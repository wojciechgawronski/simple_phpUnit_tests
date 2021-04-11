<?php declare(strict_types=1);

class User
{
    // zainicjowanie zmiennych przed inicjalizacja obiektu na potrzeby testow, php8
    public string $firstName = '';
    public string $lastName = '';
    public string $email;
    protected Mailer $mailer;

    public function getFullName() : string
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function setMailer(Mailer $mailer) : void
    {
        $this->mailer = $mailer;
    }

    public function notify( string $message)
    {
        // instend of create onstantion.. DEPENDENCY INJECTION 
        // include_once 'src/Mailer.php';
        // $mailer = new Mailer();

        return $this->mailer->sendMessage($this->email, $message);
    }
}


/*

die($baseDir . "\n"); // /var/www/html/tescik

die($vendorDir . "\n"); /var/www/html/tescik/vendor



die($baseDir . "/src" . "\n");  /var/www/html/tescik/src
*/
