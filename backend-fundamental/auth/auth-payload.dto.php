<?php

class AuthPayloadDTO
{
    private $email;
    private $password;
    private $errors = [];

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function validate()
    {
        $this->errors = [];

        if (empty($this->email)) {
            $this->errors[] = "Email is required";
        }

        if (empty($this->password)) {
            $this->errors[] = "Password is required";
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = "Email is invalid";
        }

        if (strlen($this->password) < 8) {
            $this->errors[] = "Password must be at least 8 characters long";
        }

        return $this->errors;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}
