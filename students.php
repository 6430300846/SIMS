<!DOCTYPE html>
<html lang="th">
<meta charset="UTF-8">

<head>
    <title>แอพลิเคชันจัดการข้อมูลนักเรียน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous">
</head>
<body style="padding: 5%">
    <nav class="navbar">
        <div class="container-fluid">
            <button><span class="navbar-brand" mb-0 h1>Student information management applications</br></span></button>
        </div>
    </nav>
<?php
error_reporting(E_ALL);
ini_set('display_errors','1');
ini_set('display_startup_errors','1');


$servername="localhost";
$username="root";
$password="12345678";
$dbname="students";
// create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed ".mysqli_connect_error());
}
$sql="SELECT * FROM `std_info`";
$result=mysqli_query($conn,$sql);
if($result){
    if(mysqli_num_rows($result)>0){
        echo "<table class=table caption-top p-4 mb-3>";
        echo "<tr class=table-info><th >ID</th>";
        echo "<t><th>Name</th><th>Surname</th>";
        echo "<th>ชื่อ</th><th>นามสกุล</th>";
        echo "<th>Major</th><th>Email</th></th>";
        echo "<th>Delete</th><th>Update</th></tr>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr><td>".$row["id"]."</td>";
            echo "<td>".$row["en_name"]."</td>";
            echo "<td>".$row["en_surname"]."</td>";
            echo "<td>".$row["th_name"]."</td>";
            echo "<td>".$row["th_surname"]."</td>";
            echo "<td>".$row["major_code"]."</td>";
            echo "<td>".$row["email"]."</td></td>";
            echo "<td><a href='delete_std.php ? id=".$row['id']."'><button type=button class=btn ><img width=35px src=https://cdn-icons-png.flaticon.com/512/2763/2763138.png></button></a></td>";
            echo "<td><a href='update_std_form.php ? id=".$row['id']."'><button type=button class=btn ><img width=35px src=https://cdn-icons-png.flaticon.com/512/1057/1057097.png></button></a></td></tr>";
        }
        echo "</table>";
    }
} 
?>
<div>
<a href="insert_std_form.html" class="btn btn-outline-dark btn-lg" role="button">Insert New Record</a>
</div>
</body>
</html>