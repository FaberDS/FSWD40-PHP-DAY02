<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "test_db";
    $tablename = "User";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }
    echo "Connection is working";
                    
?>