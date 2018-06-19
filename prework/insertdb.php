
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
$last_name = mysqli_real_escape_string($conn, $_POST['secondname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$sql = "INSERT INTO Users (firstname, lastname, email) VALUES ('$first_name', '$last_name', '$email')";
if (mysqli_query($conn, $sql)) {
    echo "<h1>New record created</h1>";
} else {
    echo "<h1>Record creation error for: </h1>". "<p>" . $sql . "</p>". mysqli_error($conn);
}
mysqli_close($conn);

echo "</body></html>";
?>