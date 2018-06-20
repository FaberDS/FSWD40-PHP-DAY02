<?php
    $dsn ='mysql:host=localhost;dbname=member';
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "member";
    $tablename = "people";
    try{
        $connection = new PDO($dsn, $username, $password, $options);
        // echo 'connection successful';
    } catch(PDOException $e){

    }
    
    // $conn = mysqli_connect($servername, $username, $password, $dbname);

    // if(!$conn){
    //     die("Connection failed: ". mysqli_connect_error());
    // }
    // echo "Connection is working";
                    
?> 