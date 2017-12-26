<?php

/**
 * User Class
 *
 * @author Jose Guillermo <jguillermo@outlook.com>
 * @copyright (c) 2017, Orbis
 */
class User
{
    public $name;
    public $role;


    public function __construct()
    {
        $this->name = "usuario 1";
        $this->role = "Administrador";
    }


}