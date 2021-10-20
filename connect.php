<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ersystem";

    // Create Connection
    $connect = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$connect) {
        die("Connection failed" . mysqli_connect_error());
    } //test

?>