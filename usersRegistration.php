<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
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
    <h3 class="text-center">Register User</h3>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="newUserHandler.php" method="post">
                <label for=""><b>First Name : </b></label>
                <br>
                <input type="text" name="fName" class="form-control" placeholder="* First Name Here" required>
                <br>
                <label for=""><b>Middle Name : </b></label>
                <br>
                <input type="text" name="mName" class="form-control" placeholder="* Middle Name Here" required>
                <br>
                <label for=""><b>Last Name : </b></label>
                <br>
                <input type="text" name="lName" class="form-control" placeholder="* Last Name Here" required>
                <br>
                <label for=""><b>Position : </b></label>
                <br>
                <input type="text" name="jDesc" class="form-control" placeholder="* Position Here" required>
                <br>
                <label for=""><b>Department : </b></label>
                <br>
                <select name="dept" id="" class="form-control" required>
                    <option value="">=====Select Department======</option>
                    <option value="ICT">ICT</option>
                    <option value="Accounts">Accounts</option>
                    <option value="Human Resource">Human Resource</option>
                    <option value="Administration">Administration</option>
                    <option value="Marketing">Marketing</option>
                </select>
                <br>
                <label for=""><b>Email Address : </b></label>
                <br>
                <input type="email" name="emailAddress" class="form-control" placeholder="* email Here" required>
                <br>
                <label for=""><b>Password : </b></label>
                <br>
                <input type="password" name="password" class="form-control" placeholder="* Password Here" required>
                <br>
                <div class="buttons">
                    <button class="btn btn-success" type="submit">Add User</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="btn btn-info">Update</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="btn btn-danger">Delete</a>
                </div>
                <br>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>