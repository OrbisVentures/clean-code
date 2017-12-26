<?php

require_once "ExportInterface.php";
require_once "User.php";
/**
 * Export Class
 *
 * @author Jose Guillermo <jguillermo@outlook.com>
 * @copyright (c) 2017, Orbis
 */
class Export
{
    private $exportInteface;

    public function __construct(ExportInterface $exportInteface)
    {
        $this->exportInteface = $exportInteface;
    }
    
    public function exportUser(User $user)
    {
        $this->exportInteface->download($user->name,$user->name);
    }
}