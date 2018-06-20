<?php  
    
    require 'db.php';
    $id = $_GET['id'];
    $sql = 'SELECT * FROM people WHERE id=:id';
    $statement = $connection->prepare($sql);
    $statement ->execute([':id' => $id]);
    $person = $statement->fetch(PDO::FETCH_OBJ);

    if(isset ($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];

        $sql = 'UPDATE people SET firstname=:firstname, lastname=:lastname, email=:email WHERE id=:id';

        $statement = $connection->prepare($sql);

        if($statement->execute([':firstname' =>$firstname, ':lastname' => $lastname, ':email' => $email, ':id' => $id])){
            header("Location: index.php");
        }
        //------------------------------
        // $sql = "INSERT INTO people(firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";
        // if ($firstname && $lastname && $email) {  
        //     echo "You insert " . $firstname. " ". $lastname . " " . $email . " successfull to Users";
        //     if(mysqli_query($conn, $sql)){
        //         $message = 'data inserted succesfully';
        //     }
        // } else {
        //     echo "Please insert your data";
        // }
    }
?>

<?php include('header.php');?>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Update a person</h2>
            </div>
            <div class="card-body">
                <?php if(!empty($message)): ?>

                    <div class="alert alert-success">
                        <?= $message; ?>
                    </div>
                <?php endif; ?>
                <form  method="POST">
                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input value="<?= $person->firstname;?>" type="text" name="firstname" id="firstname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input value="<?= $person->lastname;?>" type="text" name="lastname" id="lastname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input value="<?= $person->email;?>" type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Update Data</button>
                    </div>
                </form>
             </div>
        </div>
    </div>
<?php include('footer.php');?>
