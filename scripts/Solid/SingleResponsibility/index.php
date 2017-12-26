<?php

require "Dice.php";

for($i = 0 ;$i<10; $i++){
    $dice = Dice::getInstance();
    echo "\n".$dice->roll();
}
echo "\nFin\n";
