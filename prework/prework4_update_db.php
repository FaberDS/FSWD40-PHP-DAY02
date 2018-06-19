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
// $sql = "UPDATE Users SET email='jonny@net.at' WEHRE id=1";
$sql = "UPDATE Users SET lastname='Ludwig' WHERE user_id=2";
$result = mysqli_query($conn, $sql);
if ($conn->query($sql) === TRUE) {
    echo "Record updated succesfully";
} else {
    echo "Error updating record: " .$conn->error;
}

// Close connection
mysqli_close($conn);
?>

</body>
</html>