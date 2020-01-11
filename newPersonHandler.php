<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
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
    <img src="images/logo.jpg" alt="Logo" width="150" height="150">
</div>
<hr>
<div class="heading">
    <h3 class="text-center">Success</h3>
</div>
<hr>
<div class="container">
    <?php
    //Establishing a connection to MySQL Database Server
    $conn = mysqli_connect("localhost","root","","dbMakeup");
    if (!$conn){
        die("Connection Error : " . mysqli_connect_error());
    }
    //Remove SQL Injections
    $idPass = mysqli_real_escape_string($conn,$_POST['idPassNumber']);
    $firstName = mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName = mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lName']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $maritalStatus = mysqli_real_escape_string($conn,$_POST['mStatus']);
    $telephone = mysqli_real_escape_string($conn,$_POST['telNumber']);
    $emailAdd = mysqli_real_escape_string($conn,$_POST['emailAddress']);
    $dob = mysqli_real_escape_string($conn,$_POST['dob']);
    $nok = mysqli_real_escape_string($conn,$_POST['nok']);
    $nokTelephone = mysqli_real_escape_string($conn,$_POST['nokTelNumber']);
    $nokRelationship = mysqli_real_escape_string($conn,$_POST['nokRShip']);
    //Post the data from the variables above to the DB table persons
    $sql="INSERT INTO `persons`(`idPass_number`, `first_name`, `middle_name`, `last_name`, `gender`, `marital_status`, `tel_number`, `email`, `dob`, `nok`, `nok_tel`, `nok_relationship`, `join_date`) 
VALUES ('$idPass','$firstName','$middleName','$lastName','$gender','$maritalStatus','$telephone','$emailAdd','$dob','$nok','$nokTelephone','$nokRelationship',null)";
    //Execute the query in $sql
    if ($conn->query($sql)==true){
        print "<p>New Person Added Successfully.</p>";
        print "<a href='persons.php' class='btn btn-info'>New Person</a>";
    }
    else{
        print "<p>Person not added.</p>";
        print "<a href='persons.php' class='btn btn-danger'>Try Again.</a>";

    }
    //Close the database connection
    mysqli_close($conn);
    ?>
</div>
</body>
</html>