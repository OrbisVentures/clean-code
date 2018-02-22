<?php
require_once "AnnouncementBuilder.php";
require_once "AnnouncementEntity.php";

/**
 * WebBuilder Class
 *
 * @author Jose Guillermo <jguillermo@outlook.com>
 * @copyright (c) 2018, Getmin
 */
class BasicBuilder implements AnnouncementBuilder
{
    /** @var AnnouncementEntity */
    private $entity;

    public function create($title, $description)
    {
        $this->entity = AnnouncementEntity::create($title, $description);
    }

    public function setType()
    {
        $this->entity->changeType(2); // tipo basico
    }

    public function setExpirationDate()
    {
        $date = new DateTime('now');
        $date->add(new DateInterval('P2D')); // sea grega 2 dias
        $this->entity->changeExpiredAt($date);
    }

    public function getAnnouncement()
    {
        return $this->entity;
    }
}