<?php

spl_autoload_register(function ($class) {
    echo "Class: {$class}";
    // require "../classes/{$class}.php";
    // echo getcwd();
});

// $article = new Article();

// 

$product = new Product();