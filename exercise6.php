<?php
          
    $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "fatabase";
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if(!$conn){
            die("Connection failed: ". mysqli_connect_error());
        }
        echo "Connected successfully";     
        echo("<html><body>");
    $fname = mysqli_real_escape_string($conn, $_GET['firstname']);
    $sname= mysqli_real_escape_string($conn, $_GET['secondname']);
    $email = mysqli_real_escape_string($conn, $_GET['email']);
   

        $sql = "INSERT INTO User(firstname, lastname, email) VALUES ('$fname', '$sname', '$email')";
        if ($fname && $sname && $email) {  
            echo "You insert " . $fname. " ". $sname . " " . $email . " successfull to Users";
            if(mysqli_query($conn, $sql)){
                
            }
        } else {
            echo "Please insert your data";
        }
    echo "</body></html>";
    mysqli_close($conn);
?>