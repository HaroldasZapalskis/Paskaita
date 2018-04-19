<?php
    require_once 'BookRepository.php';

    $result = BookRepository::getList();

    foreach ($result as $obj){
        echo "<a href='description.php?id=".$obj->getId()."'><li>".$obj->getTitle()."</li></a>";
    }