<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <table>

        <?php
            $data = "SELECT user_id, firstname, lastname, reg_date FROM Users";
            $result = mysqli_query($conn, $data);
            
            while($row = mysqli_fetch_object($result))
            {
                
                echo "<tr>";
                echo "<td>", $row->user_id, "</td>";
                echo "<td>", $row->firstname,"</td>";
                echo "<td>", $row->lastname, "</td>";
                echo "<td>", $row->reg_date, "</td>";
                echo "<td><button id='update' onclick='function($row->user_id)'> Change</button></td>";
                echo "<tr>";
            }
            
            ?>
            </table>
    </body>
</html>