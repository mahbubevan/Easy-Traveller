<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome Traveller</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</head>


<body>
    <div class="container">
      <div class="profile">
        <form action="updateuserpro.php" method="post">
            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-info"> First Name </label>
                <input class="form-control col-4" type="text" value="<?php echo $_SESSION['firstname'];?>" name="fname"/>
              </div>
              <div class="col-md-6 form-group">
                <label class="text-info"> Last Name </label>
                <input class="form-control col-4" type="text" value="<?php echo $_SESSION['lastname'];?>" name="lname"/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-info"> User Name </label>
                <input class="form-control col-4" type="text" value="<?php echo $_SESSION['userdb'];?>" name="username"/>
              </div>
              <div class="col-md-6 form-group">
                <label class="text-info"> Password </label>
                <input class="form-control col-4" type="text" value="<?php echo $_SESSION['passdb'];?>" name="pwd"/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-info"> Email </label>
                <input class="form-control col-4" type="text" value="<?php echo $_SESSION['emaildb'];?>" name="email"/>
              </div>
              <div class="col-md-6 form-group">
                <label class="text-info"> PhoneNo </label>
                <input class="form-control col-4" type="text" value="<?php echo $_SESSION['phonedb'];?>" name="phoneno"/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-info"> Date Of Birth </label>
                <input class="form-control col-4" type="date" value="<?php echo $_SESSION['dobdb'];?>" name="dateofbirth"/>
              </div>
              <div class="col-md-6 form-group">
                <label class="text-info"> Gender </label>
                <input class="form-control col-4" type="text" value="<?php echo $_SESSION['genderdb'];?>" name="gender" disabled/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-info"> Address </label>
                <input class="form-control col-8" type="text" row="2" value="<?php echo $_SESSION['addressdb'];?>" name="address"/>
              </div>
              <div class="col-md-6 form-group">
                <label class="text-info"> City </label>
                <input class="form-control col-4" type="text" value="<?php echo $_SESSION['citydb'];?>" name="city"/>
              </div>
            </div>
            <div class="row">
              <input type="submit" name="submit" class="btn btn-danger" value="Edit Profile"/>
            </div>
        </form>
      </div>
    </div>
</body>
</html>
