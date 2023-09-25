<?php
    $servername="localhost";
    $username="root";
    $password="12345678";
    $dbname="students";
    // create connection
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die("Connection failed ".mysqli_connect_error());
    }
    $id = $_GET["id"];
    $sql = "DELETE FROM `std_info` WHERE `id`='$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location: students.php");
        exit(0);
    }else{
        die("Connection failed ".mysqli_connect_error($conn));
    }
?>