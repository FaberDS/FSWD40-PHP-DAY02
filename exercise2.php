

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <div class="container">
        <div class="box">
            <h1>Exercise 2</h1>
                <p>Create a PHP script which will accept two parameters from form (name and surname). User must insert name and surname into the form to get the output: "Welcome Name Surname!" otherwise you will output the message: please insert your name, or please insert your surname.
                </p>
        </div>
    </div>
    
        <form method="GET">
            <input type="text" name="firstname"/>      
            <input type="text" name="secondname"/>
            <input type="submit" name="submit"/>
        </form>
        <?php
            if(isset($_GET['submit']))
            {
                if( $_GET["firstname"] && $_GET["secondname"] )
                {
                    echo "Welcome ". $_GET['firstname']." ". $_GET['secondname'];
                } else {
                    echo "Please insert your name";
                }
            }
        ?>
    </body>
</html>