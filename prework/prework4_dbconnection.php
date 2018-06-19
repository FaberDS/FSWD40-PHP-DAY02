<?php include("connection.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    
<?php
// Create database
$tablename = "Employee";
$sql = "CREATE TABLE $tablename(
    user_id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(20) NOT NULL,
    lastname VARCHAR(20) NOT NULL, 
    email VARCHAR(50),
    reg_date TIMESTAMP
)";
if(mysqli_query($conn, $sql)){
    echo " Table $tablename created successfully! \n";
} else{
    echo "Error creating table $tablename: " .
    mysqli_error($conn);
}
mysqli_close($conn);
?>
    </body>
</html>