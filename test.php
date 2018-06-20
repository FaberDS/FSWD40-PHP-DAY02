<?php
	include_once("connect.php");
?>
<!DOCTYPE html PUBLIC >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>test</title>
</head>
<body>
	<?php
	$sql = "SELECT firstname, user_id FROM User";
	$result = mysqli_query($conn, $sql);
	// check if get Select Values btn is clicked ----------------------
	if(isset($_POST['submitSelect'])){
		$uId = $_POST['uId'];
		echo "You have selected: ".$uId;
	}
	?>
	<form method="post">
		<select name="uId" >
			<?php 
			// fetch a next row (as long as there are some) into $row
			while($row = mysqli_fetch_assoc($result)) {
				echo '<option value="'.$row['user_id'].'"';
				// add select to the chosen item -------------------------
				if($uId == $row['user_id']){
				echo 'selected';
				};
				echo ' > '.$row['user_id']. " " .$row['firstname'].'</option>';
			}
			echo "Fetched data successfully\n";
			// Free result set
			mysqli_free_result($result);
			// Close connection
			
			?>
		</select>
		<input type="submit" name="submitSelect" value="Get Selected Values"/>
	</form>
	<table>
<?php
	
	if(isset($_POST['upDate'])){//if the submit button is clicked
	
	$fname = mysqli_real_escape_string($conn, $_post['updatefirstname']);
	$sname= mysqli_real_escape_string($conn, $_post['updatesecondname']);
	$email = mysqli_real_escape_string($conn, $_post['updateemail']);

	var_dump($uId);
	var_dump($sname);
	echo "<br>";
	var_dump($fname);
	echo "<br>";
	var_dump($email);
	echo "<br>";
	$change = "UPDATE User SET firstname='$fname', secondname='$sname', email='$email' WHERE user_id = $uId" ;
	var_dump($change);
	echo "<br>";
	if(mysqli_query($conn, $change)){
		
	} else {
		echo "Cannot update";
	}
	// $conn->query($update) or die("Cannot update");//update or error
	}
?>
	</table>
<?php
//Create a query
$sql = "SELECT * FROM $tablename WHERE user_id =".$uId;
//submit the query and capture the result
$result = $conn->query($sql) or die(mysql_error());
$query=getenv(QUERY_STRING);
parse_str($query);

?>
<h2>Update Record <?php echo $uId;?></h2>
<form action="" method="post">
<?php
	
	
	while ($row = $result->fetch_assoc()) {?>
    
	<table border="0" cellspacing="10">
		<tr>
			<td>Firstname:</td> <td><input type="text" name="updatefirstname" value="<?php echo $row['firstname']; ?>"></td>
		</tr>
		<tr>
			<td>Secondname:</td> <td><input type="text" name="updatesecondname" value="<?php echo $row['lastname']; ?>"></td>
		</tr>
		<tr>
			<td>Email:</td> <td><input type="text" name="updateemail" value="<?php echo $row['email']; ?>"></td>
		</tr>
		<tr>
			<td><INPUT TYPE="Submit" VALUE="Update the Record" NAME="upDate"></td>
		</tr>
	</table>
	<?php	}
		?>
	</form>
	<?php
		if($update){//if the update worked
		
		echo "<b>Update successful!</b>";	

	}  
	mysqli_close($link);
?>
</body>
</html>