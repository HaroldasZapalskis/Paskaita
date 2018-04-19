<?php

class Connect{
    function getDBConnection(){
        $servername = "localhost";
        $username = "root";
        $password = "stefa123";
        $dbname = "paskaitai";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}