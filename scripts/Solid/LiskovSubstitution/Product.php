<?php

/**
 * Product Class
 *
 * @author Jose Guillermo <jguillermo@outlook.com>
 * @copyright (c) 2017, Orbis
 */
abstract class Product
{
    protected $name;

    /**
     * Product constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }

    abstract public function getUnitPrice();
}