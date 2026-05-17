<?php

class AuthEntity
{

    public string $email;
    public string $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public static function create($email, $password)
    {
        return new AuthEntity($email, $password);
    }
}