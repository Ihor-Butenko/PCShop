<?php

    $dbAdress = "sql7.freemysqlhosting.net";
    $dbUsername = "sql7602695";
    $dbPassword = "ml9UzWrc1G";
    $dbName = "sql7602695";

    // Create connection
    $connect = new mysqli($dbAdress, $dbUsername, $dbPassword, $dbName);

    // Check connection
    if ($connect->connect_error) {
      die("Connection failed: " . $connect->connect_error);
    }
    echo "Connected successfully";    

?>