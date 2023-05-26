<?php

namespace App\DTO;

class EmployeeDto
{
    public string $name;
    public string $email;
    public string $adress;
    public string $position;
    public string $password;

    public function __construct(string $name, string $email, string $password, string $adress, string $position)
    {
        $this->name = $name;
        $this->email = $email;
        $this->adress = $adress;
        $this->$position = $position;
        $this->password = $password;
    }
}
