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
