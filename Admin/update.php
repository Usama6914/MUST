 <?php
include "connect.php";
$id=$_GET['email'];
$sql = "SELECT * FROM regform WHERE email='$id' ";
$query_run=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query_run);
// $sr=$row['sr_num'];
$fname=$row['fname'];
$lname=$row['lname'];
$email=$row['email'];
$password=$row['password'];
$phone=$row['phone'];
$is=$row['international_std'];
$gender=$row['gender'];

include "updateform.html";

if(isset($_POST['update']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $is = $_POST['is'];
    $gender = $_POST['gender'];


    $sql ="UPDATE regform SET fname='$fname', lname='$lname', email='$email', password='$password', phone='$phone', international_std='$is', gender='$gender' WHERE email='$id' ";
    $query_run=mysqli_query($conn,$sql);
    if($query_run)
    echo "<script>alert('Record Updated')</script>";
    else
    echo "<script>alert('Record Updation Failed')</script>";
    header("location:admin.php");
}
?>