<?php 
include("connection.php");
$sql = "INSERT INTO Users (firstname, lastname, email) Values ('Denis', 'Schüle', 'lala@gmail.con')";

if (mysqli_query($conn, $sql)){
    echo "New record created.\n";
} else {"Error creating table: " . mysqli_error($conn) . "\n";
};

mysqli_close($conn);
?>