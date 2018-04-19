<?php
/**
 * Created by PhpStorm.
 * User: haroldas
 * Date: 18.4.19
 * Time: 18.17
 */
require_once 'BookEntity.php';
require_once("Connect.php");

class BookRepository
{
    function getList() {
        $conn = Connect::getDBConnection();
        $array = array();

        $sql = "SELECT title, year, bookId, authorId FROM Books";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $object = new BookEntity($row['title'], $row['year'], $row['bookId'], $row['authorId']);
                array_push($array, $object);
            }
        }
        $conn->close();
        return $array;
    }

    function getBookById($id) {
        $conn = Connect::getDBConnection();

        $sql = "SELECT * FROM Books WHERE bookId=$id";

        $result = $conn->query($sql);
        $result = $result->fetch_assoc();

        return new BookEntity($result['title'], $result['year'], $result['bookId'], $result['authorId']);

        $conn->close();
    }
}