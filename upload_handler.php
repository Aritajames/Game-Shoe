<?php include 'config.php';
$targetDir =  realpath(dirname(getcwd()))."static/";
$fileName =basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if(isset($_POST['upload'])&& !empty($_FILES["image"]["name"])) {
    $price = $_POST['price'];
    $brand = $_POST['brand'];
    if (empty($price)) {
        header('location:upload.php?pError');
        exit();
    } else {
        $price = $price;
    }

    if (empty($brand)) {
        header('location:upload.php?bError');
        exit();
    } else {
        $brand = $brand;
    }
    $picForm = array('jpg', 'jpeg', 'png');
    $picName = $_FILES["image"]["tmp_name"];
    if (in_array($fileType, $picForm)) {
        if (move_uploaded_file($picName, $targetFilePath)) {
            $sql = "INSERT INTO `sale` (`id` , `image` , `brand` , `price`)
                  VALUES (NULL ,'.$fileName','$brand','$price')";
            if (mysqli_query($conn, $sql)) {
                echo " Image added successfully";
            } else {
                echo "image not added";
            }
        } else {
            echo "image  not uploaded successfully";
        }
    } else {
        echo "inappropriate file format";
    }
}