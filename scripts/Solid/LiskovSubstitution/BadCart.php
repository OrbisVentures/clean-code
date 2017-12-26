<?php

/**
 * BadCart Class
 *
 * @author Jose Guillermo <jguillermo@outlook.com>
 * @copyright (c) 2017, Orbis
 */
class BadCart
{
    private $cart;

    public function totalPrice()
    {
        foreach($this->cart as $product){
            // TODO
        }
    }

    public function addPencil(Pencil $pencil)
    {
        $this->cart[] = $pencil;
    }

    public function addBook(Book $book)
    {
        $this->cart[] = $book;
    }
}