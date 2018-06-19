<!DOCTYPE html>
<?php include(insertdb.php)?>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
       
    </head>
    <body>
        <form action="insertdb.php" method="post">
            <p>
                <label for="firstName">First Name:</label>
                <input type="text" name="firstname" id="firstName">
            </p>
            <p>
                <label for="secondName">Last Name:</label>
                <input type="text" name="secondname" id="secondName">
            </p>
            <p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="emailAddress">
            </p>
            <input type="submit" value="Submit">
            </p>
        </form>
    </body>
</html>