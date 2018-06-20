<?php

    require 'db.php';

    $sql = ' SELECT * FROM people';

    $statement = $connection->prepare($sql);
    $statement -> execute();
    $people = $statement->fetchAll(PDO::FETCH_OBJ);
    //  $data = "SELECT * FROM people";
    // $result = mysqli_query($conn, $data);
    // $people = $result->fetchAll(PDO::FETCH_OBJ);
                        

?>
<?php require 'header.php';?>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>All People</h2>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>email</th>
                        <th>action</th>

                    </tr>
                    <?php foreach($people as $person): ?>
                        <tr>
                            <!-- = is euqal to php echo  -->
                            <td><?= $person->id; ?></td>
                            <td><?= $person->firstname; ?></td>
                            <td><?= $person->lastname; ?></td>
                            <td><?= $person->email; ?></td>
                            <td>
                                <a href="edit.php?id=<?= $person -> id ?>" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                                <a onclick="return confirm('Are you sure you want to delete this entry')" href="delete.php?id=<?= $person -> id ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </table> 
                <button type="button" class="btn btn-danger btn-block" id="showDetailBtn" data-toggle="modal" data-target="#modal">Delete all Data</button>
            </div>
        </div>
        <div class="modal fade" id="modal" role="dialog">
                <div class="modal-dialog">
               
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2>Clearing the whole table</h2>
                        </div>
                        <div class="modal-body">
                            <img class="mediaImg" src="'+ tempDetail.image + '" alt="">
                            
                            <p>Are you really sure, that you want to delete all data!</p>
                            <p>There is no return droped data is lost</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">cancel</button>
                            <button type="button" class="btn btn-danger" ><a class="text-dark" href="deleteall.php">delete</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<script>
</script>
<?php include('footer.php');?>
