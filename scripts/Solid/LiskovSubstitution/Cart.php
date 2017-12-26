<?php

/**
 * Cart Class
 *
 * @author Jose Guillermo <jguillermo@outlook.com>
 * @copyright (c) 2017, Orbis
 */
class Cart
{
    private $products;

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function printCart()
    {
        /** @var Product $product */
        foreach ($this->products as $product){
            echo "\n".$product->name();
        }
    }

    public function total()
    {
        $total = 0;
        /** @var Product $product */
        foreach ($this->products as $product){
            $total+= $product->getUnitPrice();
        }
        return $total;
    }

}