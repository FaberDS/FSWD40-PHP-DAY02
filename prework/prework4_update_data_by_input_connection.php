<?php
$servername = "localhost";
$username = "root";
$password = "root"; //or your password if you have one
$dbname = "first_test";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " .mysqli_connect_error());
}

echo("<html><body>");
$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$ID= mysqli_real_escape_string($conn, $_POST['ID']);
$sql = "UPDATE Users SET firstname='$first_name' WHERE user_id=$ID";
if ($conn->query($sql) === TRUE) {
    echo "Record updated succesfully";
} else {
    echo "Error updating record: " .$conn->error;
}



// Close connection
mysqli_close($conn);
?>
