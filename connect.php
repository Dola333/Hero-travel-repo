<?php

      $country = $_POST['country'];
      $when = $_POST['when'];
      $type = $_POST['type'];


//Database Connection


$conn = new mysqli('localhost', 'root', '','test');

if($conn->connect_error){
    die('Connection Failed :' .$conn->connect_error);
}else {
    $stmt = $conn->prepare("insert into where go(country)
    values(Bangladesh, India, Pakistan)");
    $stmt->bind_param("s",Country);
    $stmt->execute();
    $stmt->close();


}






?>