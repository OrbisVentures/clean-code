<?php
require_once "UserListInterface.php";
require_once "UserMngInterface.php";
/**
 * UserDB Class
 *
 * @author Jose Guillermo <jguillermo@outlook.com>
 * @copyright (c) 2017, Orbis
 */
class UserSolr implements UserSearchInterface
{

    public function searchByFilter($filter)
    {
        // TODO: Implement searchByFilter() method.
    }
}

interface UserSearchInterface
{
    public function searchByFilter($filter);
}

