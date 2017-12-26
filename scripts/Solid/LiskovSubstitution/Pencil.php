<?php
require_once "Product.php";
/**
 * Pencil Class
 *
 * @author Jose Guillermo <jguillermo@outlook.com>
 * @copyright (c) 2017, Orbis
 */
class Pencil extends Product
{
    public function getUnitPrice()
    {
        return 2.5;
    }
}