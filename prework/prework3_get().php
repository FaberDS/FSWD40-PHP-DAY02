<!DOCTYPE html>
<html>
<head>
       <title>PHP example</title>
</head>
<body>
<form action="test.php" method="GET">
Name: <input type="text" name="name" />
Age: <input type="text" name="age" />
<input type="submit" name="submit" />
</form>
<?php
if(isset($_GET['submit']))
{
if( $_GET["name"] || $_GET["age"] )
{
echo "Welcome ". $_GET['name']. "<br />";
echo "You are ". $_GET['age']. " years old.";
exit();
}
}
?>
</body>
</html>