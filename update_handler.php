<?php

if(isset($_POST['btn_update'])){

    # Form validation

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }

    # Grabbing data

    if (isset($_POST['firstname'])) {
        $firstname = $_POST['firstname'];
    } else {
        $firstname_err = "First name is required";
    };


    if (isset($_POST['lastname'])) {
        $lastname = $_POST['lastname'];
    } else {
        $lastname_err = "Last name is required";
    };


    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email_err = "Email is required";
    };

    include 'config.php';

    $sql = "UPDATE `project` SET `firstname`= '$firstname',`lastname`= '$lastname',`email`= '$email' WHERE id = $id";

    //Save data to the DB

    mysqli_query($conn,$sql);
    header("location:index.php");


}

?>



