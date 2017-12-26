<?php
require_once "Pencil.php";
require_once "Book.php";
require_once "Cart.php";

$pencil = new Pencil('Lapiz 2H');
$book = new Book('Libro ABC');

$cart = new Cart();
$cart->addProduct($pencil);
$cart->addProduct($book);

$cart->printCart();
echo "\n TOTAL :".$cart->total();