<?php
require_once "Product.php";
/**
 * Book Class
 *
 * @author Jose Guillermo <jguillermo@outlook.com>
 * @copyright (c) 2017, Orbis
 */
class Book extends Product
{
    public function getUnitPrice()
    {
        return 10.2;
    }
}