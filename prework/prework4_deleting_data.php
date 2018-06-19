<html>
<body>

    
<?php
$servername = "localhost";
$username   = "root";
$password   = "root"; 
$dbname     = "first_test";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}
// sql to update a record in the Users table

// sql to delete a record from the Users table
$sql = "DELETE FROM Users WHERE user_id=2";
$result = mysqli_query($conn, $sql);
if ($conn->query($sql) === TRUE) {
    echo "Record deleted succesfully";
} else {
    echo "Error updating record: " .$conn->error;
}

// Close connection
mysqli_close($conn);
?>

</body>
</html>