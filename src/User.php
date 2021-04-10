<?php declare(strict_types=1);

class User
{
    // zainicjowanie zmiennych przed inicjalizacja obiektu na potrzeby testow, php8
    public string $firstName = '';
    public string $lastName = '';

    public function getFullName() : string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}


/*

die($baseDir . "\n"); // /var/www/html/tescik

die($vendorDir . "\n"); /var/www/html/tescik/vendor



die($baseDir . "/src" . "\n");  /var/www/html/tescik/src
*/
