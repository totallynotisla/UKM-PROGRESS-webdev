<?php

class AuthPayloadDto
{
    private string $email;
    private string $password;

    private array $errors = [];

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function validate()
    {
        $this->errors = [];

        if (empty($this->email)) {
            $this->errors[] = 'Email diperlukan!';
        }

        if (empty($this->password)) {
            $this->errors[] = 'Password diperlukan!';
        }

        if (strlen($this->password) < 8) {
            $this->errors[] = 'Password harus memiliki minimal 8 karakter!';
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = 'Format email tidak valid!';
        }
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}

