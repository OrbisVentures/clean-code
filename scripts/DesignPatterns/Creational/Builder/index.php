<?php

require_once "Director.php";

require_once "WebBuilder.php";
require_once "BasicBuilder.php";
require_once "/usr/src/myapp/printmask.php";

$webBuilder = new WebBuilder();
$basicBuilder = new BasicBuilder();

$director = new Director();



$director->createAnnouncement($webBuilder,'anuncio web','puesto de trabajo');
$announcementWeb = $webBuilder->getAnnouncement();


$director->createAnnouncement($basicBuilder,'anuncio basico','se busca programador');
$announcementBasic = $basicBuilder->getAnnouncement();


$mask = "|%15s | %-30s |\n";
printmask($mask,$announcementWeb->toArray(),'Tipo WEB');
printmask($mask,$announcementBasic->toArray(),'Tipo BASICO');
