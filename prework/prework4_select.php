<?php
include("connection.php");
$sql = "SELECT firstname FROM Users";
$result = mysqli_query($conn, $sql);
?>
<form >
    <select >
        <?php 
        // fetch a next row (as long as there are some) into $row
        while($row = mysqli_fetch_assoc($result)) {
            echo '<option value="'.$row['id'].'"> '.$row['firstname'].'</option>';
        }
        echo "Fetched data successfully\n";
        // Free result set
        mysqli_free_result($result);
        // Close connection
        mysqli_close($conn);
        ?>
    </select>
</form>