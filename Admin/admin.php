<?php
                include "connect.php";
                $show="";
                if(isset($_POST['frm']))
                {
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
                }}
                elseif(isset($_POST['frm1']))
                {
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
                                        <td><a href="del.php?email='.$row['email'].' ">Delete</a></td>
                                        </tr>';
                }}
                elseif(isset($_POST['frm2']))
                {
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
                                        <td><a href="update.php?email='.$row['email'].' ">Update</a></td>
                                        </tr>';
                }}
                ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | MUST</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="../images/must-logo.png" alt="MUST" width="30" height="24">
                </a>
            </div>
        </nav>
    </header>
    <section>
        <div class="contaier-fluid">
            <div class="row">
                <div class="col-3 sidebar">
                    <div class="sidebutton">
                        <h3><i class="bi bi-speedometer2"></i> Dashboard</h3>
                        <form method="POST">
                            <button type="submit" name="frm" class="btn">All Students</button>
                            <button type="submit" name="frm1" class="btn">Delete Students Record</button>
                            <button type="submit" name="frm2" class="btn">Update Students Record</button>
                        </form>
                    </div>
                </div>
                <div class="col-9">
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


                </div>
            </div>
        </div>
    </section>
</body>

</html>