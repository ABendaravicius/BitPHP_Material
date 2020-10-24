<?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'mysql';
    $dbname = 'phpdb';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die('Connecton failed: ' . mysqli_connect_error());
    }

    echo 'Connected successfully<br>';

    // $sql = "CREATE DATABASE IF NOT EXISTS phpDB"; // DB sukūrimas

    // if (mysqli_query($conn, $sql)) {
    //     echo 'DB Created Successfully';
    // } else {
    //     echo 'Connection error: ' . mysqli_error($conn);
    // }

    mysqli_close($conn);
?>