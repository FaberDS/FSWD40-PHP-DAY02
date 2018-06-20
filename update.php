<?php
    include("connect.php");
    $sql = "UPDATE User SET firstname='$_POST[fname]', lastname ='$_POST[lname]', email ='$_POST[email]' WHERE user_id='$_POST[id]'";

    if(mysqli_query($conn, $sql)){
        header("refresh: 1; url=exercise2.php");
    } else {
        echo "Error while updating data";
    }

?>