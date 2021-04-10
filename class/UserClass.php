<?php declare(strict_types=1);

class UserClass
{
    public string $firstName;
    public string $lastName;

    public function getFullName() : string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
