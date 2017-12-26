<?php

/**
 * UserService Class
 * @author Jose Guillermo <jguillermo@outlook.com>
 * @copyright (c) 2017, Orbis
 */
class UserRepository
{
    public function save($name,$password)
    {
        // TODO
    }
}

class UserService
{
    public function authenticate($name,$password)
    {
        // TODO
    }
}

class UserEntity
{
    private $name;
    private $password;

    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
    }

    public function password()
    {
        return $this->password;
    }

}