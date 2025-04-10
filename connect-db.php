<?php
    $dbName = "simak";
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "1234567890";
    $connString = "mysql:dbname=$dbName;host=$dbHost";
    $conn = new PDO($connString, $dbUser, $dbPass);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
?>