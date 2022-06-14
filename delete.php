<?php 
require_once "connect.php";

$id = $_GET['id'];
$sql= "DELETE FROM member_list WHERE id= $id";

if(mysqli_query($connect,$sql)){
    header("location:student_list.php");
};


?>