<?php
    require_once 'BookRepository.php';
    $result = BookRepository::getBookById($_GET['id']);
    echo "Book title:" . $result->getTitle() ." <br>Book year:".$result->getYear()."<br>AuthorId:".$result->getAuthorId()."";