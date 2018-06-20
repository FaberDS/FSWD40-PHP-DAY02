<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM people';
$statement = $connection->prepare($sql);
echo "hhallo";
if ($statement -> execute([':id' => $id])) {
    header('Location: index.php');
} else{
    echo "errror";
}
