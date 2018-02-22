<?php
require_once "AnnouncementBuilder.php";
require_once "AnnouncementEntity.php";

/**
 * WebBuilder Class
 *
 * @author Jose Guillermo <jguillermo@outlook.com>
 * @copyright (c) 2018, Getmin
 */
class WebBuilder implements AnnouncementBuilder
{
    /** @var AnnouncementEntity */
    private $entity;

    public function create($title, $description)
    {
        $this->entity = AnnouncementEntity::create($title, $description);
    }

    public function setType()
    {
        $this->entity->changeType(1); // tipo web
    }

    public function setExpirationDate()
    {
        $date = new DateTime('now');
        $date->add(new DateInterval('P10D')); // sea grega 10 dias
        $this->entity->changeExpiredAt($date);
    }

    public function getAnnouncement()
    {
        return $this->entity;
    }
}