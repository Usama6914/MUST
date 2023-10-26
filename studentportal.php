<?php
include "Admin/connect.php";
$show="";
$sql = "SELECT * FROM regform";
$query_run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query_run))
{
    $show .='<tr>
                    <td>'.$row['sr_num'].'</td>
                    <td>'.$row['fname'].'</td>
                    <td>'.$row['lname'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['phone'].'</td>
                    <td>'.$row['international_std'].'</td>
                    <td>'.$row['gender'].'</td>
                    </tr>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal | MUST</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

   
    <style>
        .navbar{
    height: 80px;
}
.navbar .navbar-brand img{
    width: 200px;
    height: 45px;
}
.navbar{
    background: linear-gradient(89deg, #112c4f 39.234406%, #991b1e 122.5708%);
}
.sec1{
    background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/banner1.jpeg);
    background-attachment: fixed;
     background-position: center;
     background-repeat: no-repeat;
     background-size: cover;
    background-repeat:no-repeat;
    width:100%;
    height:100vh;
    margin-top:0vh;
}
.card-header h4{
    text-align:center;
    font-weight:bold;
}
.card{
    margin-top:10vh;
}

    </style>
</head>
<body>
<header>
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="images/must-logo.png" alt="MUST" width="30" height="24">
                </a>
            </div>
        </nav>
    </header>

<section class="sec1">
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Registered Students</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-bordered table-striped">
                            <tr>
                                <th>Roll.#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>International Student</th>
                                <th>Gender</th>
                            </tr>
                            <tr>
                                <?php
                                echo $show;
                                ?>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </section>


    <?php
    include "footer.html";
    ?>
</body>
</html>