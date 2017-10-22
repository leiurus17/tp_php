<?php 

    // include 'class_books.php'; Already included or extended on class_novel.php???
    include 'class_book.php';
    include 'class_novel.php';
    
    $physics     = new Books();
    $chemistry   = new Books();
    $mathematics = new Books();
    $twilight    = new Novel();
    
    $astronomy   = new Book("Stargazing for Dummies", 5);

    $physics     -> setTitle("Physics for High School");
    $chemistry   -> setTitle("Advanced Chemistry");
    $mathematics -> setTitle("Algebra");
    $twilight    -> setTitle("Twilight");
    
    $twilight    -> setPublisher("Little, Brown and Company");
    
    $physics     -> setPrice(10);
    $chemistry   -> setPrice(15);
    $mathematics -> setPrice(7);
    $twilight    -> setPrice(2);
    
    $physics     -> getTitle();
    $chemistry   -> getTitle();
    $mathematics -> getTitle();
    $astronomy   -> getTitle();
    $twilight    -> getTitle();
    
    $physics     -> getPrice();
    $chemistry   -> getPrice();
    $mathematics -> getPrice();
    $astronomy   -> getPrice();
    $twilight    -> getPrice();
    
    $twilight    -> getPublisher();
?>