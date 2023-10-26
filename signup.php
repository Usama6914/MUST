<?php
include "Admin/connect.php";
include "signup.html";

if(isset($_POST['frm']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $is = $_POST['is'];
    $gender = $_POST['gender'];

    $sql= "INSERT INTO regform(`fname`,`lname`,`email`,`password`,`phone`,`international_std`,`gender`) VALUES('$fname','$lname','$email','$password','$phone','$is','$gender')";
    $query_run=mysqli_query($conn,$sql);
    if($query_run)
    echo "<script>alert('Registration Successful')</script>";
else
echo "<script>alert('Something went wrong')</script>";

}


?>