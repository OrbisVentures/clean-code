<?php

/**
 * AnnouncementBuilder Interface
 *
 * @author Jose Guillermo <jguillermo@outlook.com>
 * @copyright (c) 2018
 */
interface AnnouncementBuilder
{
    public function create($title, $description);

    public function setType();

    public function setExpirationDate();

    public function getAnnouncement();
}