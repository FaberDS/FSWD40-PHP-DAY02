<?php
include("connection.php");
$sql = "SELECT user_id, lastname, firstname, email, reg_date FROM Users";
$result = mysqli_query($conn, $sql);
// fetch a next row (as long as there are some) into $row
while($row = mysqli_fetch_assoc($result)) {
       printf("%s %s %s %s %s",
                     $row["user_id"], $row["lastname"],$row["firstname"], $row["email"], $row["reg_date"]);
}
echo "Fetched data successfully\n";
// Free result set
mysqli_free_result($result);
// Close connection
mysqli_close($conn);
?>