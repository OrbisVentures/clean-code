<?php

require_once "ExcelExport.php";
require_once "User.php";
/**
 * BadExport Class
 *
 * @author Jose Guillermo <jguillermo@outlook.com>
 * @copyright (c) 2017, Orbis
 */
class BadExport
{
    public function export(User $user)
    {
        $excel = new ExcelExport();
        $excel->download($user->name,$user->role);
    }
}


