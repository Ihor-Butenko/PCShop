<?php

    $dbAdress = "sql7.freesqldatabase.com";
    $dbUsername = "sql7600469";
    $dbPassword = "LxrbvwFhNL";
    $dbName = "sql7600469";

    // Create connection
    $connect = new mysqli($dbAdress, $dbUsername, $dbPassword, $dbName);

    // Check connection
    if ($connect->connect_error) {
      die("Connection failed: " . $connect->connect_error);
    }
    echo "Connected successfully";    

?>