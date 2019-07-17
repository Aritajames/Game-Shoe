<?php

$conn=mysqli_connect('localhost','root','','shoes1');

if(!$conn){
    die("Connection failed".mysqli_connect_error());
}

$sql="CREATE TABLE project (
  id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(60),
  password VARCHAR(100) NOT NULL,
  date_reg TIMESTAMP  DEFAULT CURRENT_TIMESTAMP  ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($conn,$sql)){
    echo "Table project created successfully"."<br>";
}else{
    echo "Error creating table project: ".mysqli_error($conn)."<br>";
}


if(mysqli_query($conn, $sql)){

    //Grabbing the ID of the last added item
    $last_item = mysqli_insert_id($conn);

    echo "Record inserted successfully";
}else{
    echo "Error: ".$sql.">>>".mysqli_error($conn);
}


//selecting data
//SELECT 'COLUMN' FROM 'TABLENAME'

//SELECT FROM TABLENAME
$sql = "SELECT id,firstname,lastname FROM project";

$result = $conn->query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "id.".$row["id"]." ".$row["firstname"]." ".$row["lastname"]."<br>";//.$row["email"]."<br>".$row["password"]."<br>";
    }
}else{
    "0 results";
}


mysqli_close($conn);

?>