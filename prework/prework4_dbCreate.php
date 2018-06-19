
<?php
include("connection.php");  
$sql = "CREATE DATABASE halo";
if(mysqli_query($conn, $sql)){
    echo " Database halo created successfully! \n";
} else{
    echo "Error creating database halo: " .
    mysqli_error($conn);
}
mysqli_close($conn);
?>