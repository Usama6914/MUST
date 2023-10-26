<?php
include "connect.php";
$id=$_GET['email'];
$sql= "DELETE FROM regform WHERE email='$id' ";
$query_run=mysqli_query($conn,$sql);

header("location:admin.php")
?>