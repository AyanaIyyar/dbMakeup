<?php
session_start();

if(isset($_POST['submit'])){
    //include 'db_connect.php';
    $conn = mysqli_connect("localhost","root","","dbMakeup");
    if (!$conn)
    {
        die("Connection Failed : " . mysqli_connect_error());
    }

    $email = mysqli_real_escape_string($conn,$_POST['eMail']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $dept = mysqli_real_escape_string($conn,$_POST['dept']);

    $qry=mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$password' AND department='$dept'");
    $row = mysqli_fetch_assoc($qry);
    $active = $row['active'];

    $count = mysqli_num_rows($qry);

    // If result matched $username,$password and $usertype, table row must be 1 row

    if($count == 1) {

        if(!empty($username) && !empty($password) && $dept=='ICT'){
            header("LOCATION:ict_dashboard.php");
        }

        else if(!empty($username) && !empty($password) && $dept=='Accounts'){
            header("LOCATION:accounts_dashboard.php");
        }

        else if(!empty($username) && !empty($password) && $dept=='Human Resource'){
            header("LOCATION:hr_dashboard.php");
        }

        else if(!empty($username) && !empty($password) && $dept=='Administration'){
            header("LOCATION:admin_dashboard.php");
        }
        else if(!empty($username) && !empty($password) && $dept=='Marketing'){
            header("LOCATION:mkt_dashboard.php");
        }
    }else {
        header("LOCATION:login_error.php");
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon" href="images/logo.jpg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<hr>
<div class="logo">
    <img src="images/logo.jpg" alt="logo.jpg" width="150" height="150">
</div>
<hr>
<div class="heading">
    <h3 class="text-center"><b>Login</b></h3>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="" method="post">
                <label for=""><b>Email:</b></label>
                <br>
                <input type="email"name="eMail" class="form-control" placeholder="*Your Email Address" required>
                <br>
                <label for=""><b>Password:</b></label>
                <br>
                <input type="password" name="password" class="form-control"placeholder="*Your Password Here" required>
                <br>
                <label for=""><b>Department:</b></label>
                <br>
                <select name="dept" id="" class="form-control" required>
                    <option value="">====Select Department====</option>
                    <option value="ICT">ICT</option>
                    <option value="Accounts">Accounts</option>
                    <option value="Human Resource">Human Resource</option>
                    <option value="Administration">Administration</option>
                    <option value="Marketing">Marketing</option>
                </select>
                <br>
                <div class="buttons">
                    <button  name="submit" type="submit" class="btn btn-info">Login</button>
                </div>
                <br>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>
