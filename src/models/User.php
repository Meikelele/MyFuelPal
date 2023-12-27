<?php

class User{
    private $email;
    private $password;
    private $name;
    private $username;

    public function __construct(string $email, string $password, string $name, string $username)
    {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->$username = $username;
    }


}