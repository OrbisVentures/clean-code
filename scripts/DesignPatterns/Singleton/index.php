<?php

require "Dice.php";

for($i = 0 ;$i<6; $i++){
    $dice = Dice::getInstance();
    echo "\n".$dice->roll();
}
