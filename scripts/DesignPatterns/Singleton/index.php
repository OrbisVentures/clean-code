<?php

require "Dice.php";











for($i = 0 ;$i<10; $i++){
    $dice = Dice::getInstance();
    print "\n".$dice->roll();
}















echo "\nFin\n";
