<?php include 'header.php'?>



<?php
include 'config.php';
if(isset($_GET['user_id'])){
    $id = $_GET['user_id'];
    $firstname = $_GET['u_firstname'];
    $lastname = $_GET['u_lastname'];
    $email = $_GET['u_email'];
}



?>

<div class="container">
    <div class="jumbotron">
        <h3 style="text-align: center">Welcome to Arita's Detail Page</h3>
    </div>
</div>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="update_handler.php" method="post">
            <input type="text" name="id" hidden value="<?php echo $id  ?>">
            <div class="form-group">
                <label for="firstname">First name:</label>
                <input type="text" class="form-control" id="firstname" placeholder="Enter first Name" name="firstname" value="<?php echo $firstname ?>">
            </div>
            <div class="form-group">
                <label for="lastname">Last name:</label>
                <input type="text" class="form-control" id="lastname" placeholder="Enter last name" name="lastname" value="<?php echo $lastname ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email ?>">

                <br><br>

                <button type="submit" name="btn_update" class="btn btn-default">Update</button>
            </div>
            <div class="col-md-4"></div>
    </div>

    <?php include 'footer.php'?>
