<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Persons Report</title>
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
    <h3 class="text-center">Persons Report</h3>
</div>
<hr>
<?php
$conn=mysqli_connect("localhost","root","","dbMakeup");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($conn,"SELECT * FROM persons");

echo "<table class='table table-striped table-responsive-sm'>
<tr>
<th>ID/Passport Number</th>
<th>First Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>Mar. Status</th>
<th>Telephone</th>
<th>Email</th>
<th>DOB</th>
<th>NOK</th>
<th>NOK Tel.</th>
<th>NOK R-Ship</th>
<th>Join Date</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['idPass_number'] . "</td>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['middle_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['marital_status'] . "</td>";
    echo "<td>" . $row['tel_number'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['dob'] . "</td>";
    echo "<td>" . $row['nok'] . "</td>";
    echo "<td>" . $row['nok_tel'] . "</td>";
    echo "<td>" . $row['nok_relationship'] . "</td>";
    echo "<td>" . $row['join_date'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($conn);

?>
</body>
</html>