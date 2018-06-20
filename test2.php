<?php
   include("connect.php");

    $sql = "SELECT * FROM User";
    $records = mysqli_query($conn, $sql);
?>
<table>
    <tr>
        <th>Firstname</th>
        <th>Secondname</th>
        <th>Email-Address</th>
    </tr>
    <?php
    while($row = mysqli_fetch_array($records)){
            echo "<tr><form action='update.php' method='POST'>";
            echo "<td><input type='text' name='fname' value='".$row['firstname']. "'></td>";
            echo "<td><input type='text' name='lname' value='".$row['lastname']. "'></td>";
            echo "<td><input type='text' name='email' value='".$row['email']. "'></td>";
            echo "<td><input type='hidden' name='id' value='".$row['user_id']. "'></td>";
            echo "<td><input type='submit'></td>";
            echo "</form></tr>";
    }
    ?>
</table>



