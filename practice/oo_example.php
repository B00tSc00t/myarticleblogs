<?php

require 'Item.php';
require 'Book.php';

$my_item = new Item();
$my_item->name = "Radio";

echo $my_item->getListingDescription();

echo "<br>";

$book = new Book();
$book->name = "Super Awesome";
$book->author = "Does anyone really know...";

echo $book->getListingDescription();

echo $my_item->code;

$book = new Book();
echo $book->getCode();

// $my_item = new Item("Big", "Bigger");

// $item2= new Item("Little", "Littler");

// Item::showCount();

// $my_item->name = "Little guy";

// echo $my_item->getName();

// $my_item = new Item();

// $count = 0;

// $count++;

// define('MAXIMUM', 100);

// define('COLOR', 'blue');

// echo Item::MAX_LENGTH;