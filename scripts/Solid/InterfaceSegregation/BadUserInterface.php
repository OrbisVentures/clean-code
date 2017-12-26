<?php

/**
 * UserDbInterface Class
 *
 * @author Jose Guillermo <jguillermo@outlook.com>
 * @copyright (c) 2017, Orbis
 */
interface BadUserInterface
{
    public function searchByFilter($filter);

    public function findById($idUser);

    public function persist();
}