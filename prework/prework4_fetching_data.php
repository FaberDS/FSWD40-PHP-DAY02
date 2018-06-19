<html>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Lastname</th>
        <th>Firstname</th>
        <th>Email Address</th>
        <th>Registration date</th>
    </tr>
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
/* sql to create table
$sql = "CREATE TABLE Users (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
*/
$sql = "SELECT user_id, lastname, firstname, email, reg_date FROM Users";
$result = mysqli_query($conn, $sql);
// fetch a next row (as long as there are some) into $row
while($row = mysqli_fetch_assoc($result)) {
       printf("<tr><td>%s</td><td> %s </td> <td>%s</td> <td>%s</td> <td>%s</td></tr>",
                     $row["user_id"], $row["lastname"],$row["firstname"], $row["email"], $row["reg_date"]);
}
echo "Fetched data successfully\n";
// Free result set
mysqli_free_result($result);
// Close connection
mysqli_close($conn);
?>
</table>
</body>
</html>