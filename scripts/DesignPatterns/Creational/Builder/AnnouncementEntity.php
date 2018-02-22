<?php

/**
 * Announcement Class
 *
 * @author Jose Guillermo <jguillermo@outlook.com>
 * @copyright (c) 2018
 */
class AnnouncementEntity
{
    protected $id;

    protected $title;

    protected $description;

    protected $type;

    protected $publishedAt;

    protected $expiredAt;

    public static function create(string $title, string $description)
    {
        $announcement = new self();
        $announcement->id = uniqid();
        $announcement->title = $title;
        $announcement->description = $description;
        $announcement->publishedAt = new DateTime('now');
        return $announcement;
    }

    public function id()
    {
        return $this->id;
    }

    public function title()
    {
        return $this->title;
    }

    public function description()
    {
        return $this->description;
    }

    public function type()
    {
        return $this->type;
    }

    public function expiredAt()
    {
        return $this->expiredAt;
    }

    public function changeType(int $type)
    {
        $this->type = $type;
    }

    public function changeExpiredAt(DateTime $expiredAt)
    {
        $this->expiredAt = $expiredAt;
    }

    public function toArray()
    {
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'type'=>$this->type,
            'publishedAt'=>$this->publishedAt->format('y-m-d'),
            'expiredAt'=>$this->expiredAt->format('y-m-d'),
        ];
    }

}