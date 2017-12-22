<?php

/**
 * Dice Class
 * @author Jose Guillermo <jguillermo@outlook.com>
 * @copyright (c) 2017, Orbis
 */
class Dice
{
    private static $instance;
    /**
     * Dice constructor.
     */
    private function __construct()
    {
    }

    /**
     * @return Dice
     */
    public static function getInstance()
    {
        if(self::$instance == null){
            echo "Se creo la instancia solo una vez";
            self::$instance = new Dice();
        }
        return self::$instance;
    }

    public function roll()
    {
        return rand(1, 6);
    }
}