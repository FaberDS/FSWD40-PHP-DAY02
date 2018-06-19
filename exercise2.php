
<?php 
include("connect.php")
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="css/style.css" rel="stylesheet"> -->
        <style>
  
            .box{
                width: 80%;
                border: 2px solid grey;
                margin: 0 auto;
                margin-top: 15px;
                padding: 15px;
                background-color: #ddd;
            }

            td{    
                line-height: 1.5em;
                padding: 15px;
                border: 1px solid black;
                background-color: #aaa;
            }
            #updateBtn{
                font-size: 2em;
                border-radius: 50%;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="box">
            <h1>Exercise 2</h1>
                <p>Create a PHP script which will accept two parameters from form (name and surname). User must insert name and surname into the form to get the output: "Welcome Name Surname!" otherwise you will output the message: please insert your name, or please insert your surname.
                </p>
                <hr>
                <form method="GET">
                    <input type="text" name="firstname"/>      
                    <input type="text" name="secondname"/>
                    <input type="submit" name="submit"/>
                </form>
                <?php
                //     if(isset($_GET['submit']))
                //     {
                //         if( $_GET["firstname"] && $_GET["secondname"] )
                //         {
                //             echo "Welcome ". $_GET['firstname']." ". $_GET['secondname'];
                //         } else {
                //             echo "Please insert your name";
                //         }
                //     }
                // ?>

        </div> 

        <div class="box">
            <h1>Exercise 3</h1>
                <p>Create a function which takes two integer parameters - divide them and output the result on the screen.
                </p>
                <hr>
                <form method="GET">
                    <input type="text" name="divident"/>      
                    <input type="text" name="divisor"/>
                    <input type="submit" name="calculate"/>
                </form> 
                <?php
                    // function divide($btn, $num1, $num2){
                    //     if(isset($btn))
                    //     {
                    //         if ($num2 == 0){
                    //             echo "The Divisor is not allowed to be 0, please change it";
                    //         }
                    //         elseif( is_numeric($num1) && is_numeric($num2) )
                    //         {   
                    //             $num1 = (double)$num1;
                    //             $num2 = (double)$num2;
                    //             $result = $num1 / $num2;
                    //             echo "The result is ". $result;
                    //         } else {
                    //             echo "Please insert two Numbers";
                    //         }
                    //     }
                    // }
                    // divide($_GET['calculate'], $_GET['divident'], $_GET['divisor']);
                    
                ?>
        </div>

         

       <div class="box">
            <h1>Exercise 4</h1>
                <p>Create a Database using PHP and MySQL.
                </p>
                <hr>
                <?php
                    
                    
                    // // Create DB
                    // $sql = "CREATE DATABASE $dbname DEFAULT CHARACTER SET utf8";
                    // if(mysqli_query($conn, $sql)){
                    //     echo "<br>Database $dbname created successfully! \n";
                    // } else {
                    //     echo "<br> Error creating database $dbname: " . mysqli_error($conn);

                    // }
                    
                ?> 
        </div>
        
        <div class="box">
            <h1>Exercise 5</h1>
                <p>Create a Table in your Database using PHP and MySQL.
                </p>
                <hr>
                <?php
                    // 
  
                    // //Create table
                    // $sql = "CREATE TABLE $tablename(
                    //     user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    //     firstname VARCHAR(20) NOT NULL,
                    //     lastname VARCHAR(20) NOT NULL,
                    //     email VARCHAR(50),
                    //     reg_date TIMESTAMP)";
                    // if(mysqli_query($conn, $sql)){
                    //     echo "Table $tablename created successfully! \n";
                    // } else {
                    //     echo "Error creating table $tablename: " . mysqli_error($conn);
                    // }
                ?>       
        </div>

        <div class="box">
            <h1>Exercise 6</h1>
                <p>Insert data into MySQL table using PHP and MySQL.
                </p>
                <hr> 
                <?php
                    // $sql = "INSERT INTO $tablename (firstname, lastname, email) VALUES
                    //         ('Denis', 'Urli', 'urli@gmx.pp')
                    //         ";
                    // if(mysqli_query($conn, $sql)){
                    //     echo "Data were added to $tablename  successfully! \n";
                    // } else {
                    //     echo "Error adding value to $tablename: " . mysqli_error($conn);

                    // }
                ?>
        </div>

        <div class="box">
            <h1>Exercise 7</h1>
                <p>Create a form which will insert data into MySQL table using PHP and MySQL
                </p>
                <hr>
                <form action="exercise2.php" method="GET">
                    Firstame: <input type="text" name="firstname"></> 
                    <br>       
                    Secondname: <input type="text" name="secondname"></>
                    <br>       
                    Email: <input type="email" name="email"></>
                    <br>
                    <input type="submit" name="submitData"/>
                </form>
                <?php
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
                            
                ?>
        </div>
        <div class="box">
            <h1>Exercise 8</h1>
                <p>Display all the records from the MySQL table using PHP and MySQL.
                </p>
                <hr>
                <table class="fTable">
                    <th>
                        <td>ID</td>
                        <td>Firstname</td>
                        <td>Secondname</td>
                        <td>Email</td>
                        <td>Registrationdate</td>
                        <td> </td>
                    </th>
                    <?php
                        $data = "SELECT user_id, firstname, lastname, email, reg_date FROM User";
                        $result = mysqli_query($conn, $data);
                        
                        while($row = mysqli_fetch_object($result))
                        {
                            
                            echo "<tr>";
                                echo "<td>", $row->user_id, "</td>";
                                echo "<td>", $row->firstname,"</td>";
                                echo "<td>", $row->lastname, "</td>";
                                echo "<td>", $row->email, "</td>";
                                echo "<td>", $row->reg_date, "</td>";
                                echo "<td><button id='updateBtn' onclick='function($row->user_id)'> <i class='fas fa-pencil-alt'></i></button></td>";
                            echo "</tr>";
                        }
                
                    ?>
                </table>
        </div>  
    </div>      
    </body>
</html>