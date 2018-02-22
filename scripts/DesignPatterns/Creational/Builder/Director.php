<?php
require_once "AnnouncementBuilder.php";
/**
 * Director Class
 *
 * @author Jose Guillermo <jguillermo@outlook.com>
 * @copyright (c) 2018, Getmin
 */
class Director
{
    public function createAnnouncement(AnnouncementBuilder $builder,$title,$description)
    {
        $builder->create($title,$description);
        $builder->setType();
        $builder->setExpirationDate();
    }
}