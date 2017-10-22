<?php 

    require 'class_books.php';
    
    $physics     = new Books();
    $chemistry   = new Books();
    $mathematics = new Books();
    
    $astronomy   = new Books("Stargazing for Dummies", 5);

    $physics     -> setTitle("Physics for High School");
    $chemistry   -> setTitle("Advanced Chemistry");
    $mathematics -> setTitle("Algebra");
    
    $physics     -> setPrice(10);
    $chemistry   -> setPrice(15);
    $mathematics -> setPrice(7);
    
    $physics     -> getTitle();
    $chemistry   -> getTitle();
    $mathematics -> getTitle();
    $astronomy   -> getTitle();
    
?>