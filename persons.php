<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Persons</title>
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
    <h3 class="text-center">Persons</h3>
</div>
<hr>
<div class="container">
    <form action="newPersonHandler.php" method="post">
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>ID/Passport Number : </b></label>
                <br>
                <input type="text" name="idPassNumber" class="form-control" placeholder="* ID/Passport Number Here" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>First Name : </b></label>
                <br>
                <input type="text" name="fName" class="form-control" placeholder="* First Name Here" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Middle Name : </b></label>
                <br>
                <input type="text" name="mName" class="form-control" placeholder="* Middle Name Here" required>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>Last Name : </b></label>
                <br>
                <input type="text" name="lName" class="form-control" placeholder="* Last Name Here" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Gender : </b></label>
                <br>
                <input type="radio" name="gender" value="Male" required>&nbsp;Male
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" value="Female" required>&nbsp;Female
            </div>
            <div class="col-sm-4">
                <label for=""><b>Marital Status : </b></label>
                <br>
                <select name="mStatus" id="" class="form-control" required>
                    <option value="" disabled>=====Select Marital Status=====</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Separated">Separated</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>Telephone Number : </b></label>
                <br>
                <input type="text" name="telNumber" class="form-control" placeholder="* Telephone Number Here" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Email Address : </b></label>
                <br>
                <input type="email" name="emailAddress" class="form-control" placeholder="* Email Address Here" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Date of Birth : </b></label>
                <br>
                <input type="date" name="dob" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>Next Of Kin (NOK) : </b></label>
                <br>
                <input type="text" name="nok" class="form-control" placeholder="* Next Of Kin Here" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>NOK Telephone Number : </b></label>
                <br>
                <input type="text" name="nokTelNumber" class="form-control" placeholder="* NOK Telephone Number Here" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>NOK Relationship : </b></label>
                <br>
                <select name="nokRShip" id="" class="form-control" required>
                    <option value="" disabled>====Select NOK Relationship====</option>
                    <option value="Father">Father</option>
                    <option value="Mother">Mother</option>
                    <option value="Brother">Brother</option>
                    <option value="Sister">Sister</option>
                    <option value="Uncle">Uncle</option>
                    <option value="Aunt">Aunt</option>
                    <option value="Aunt">Spouse</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="buttons">
            <button class="btn btn-success" type="submit">Add New</button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="btn btn-primary">Update</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="btn btn-danger">Delete</a>
        </div>
        <hr>
    </form>
</div>
</body>
</html>