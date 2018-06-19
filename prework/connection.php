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
?>