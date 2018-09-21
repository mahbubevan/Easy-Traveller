<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Registration || Form </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reg.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  </head>

<body>

  <div class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-custom">
    <a class="navbar-brand" href="index.php">Easy Traveller</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav ">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tour.php">Tour Packages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html"></a>
        </li>
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="about.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Conversions
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="res.html">Currency Converter</a>
            <a class="dropdown-item" href="res.html">Time Converter</a>
            <a class="dropdown-item" href="res.html">Weather Checking</a>
          </div>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="res.php">Restaurants</a>
        </li>
      <!--  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="res.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hotels
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="res.html">International</a>
            <a class="dropdown-item" href="res.html">Domestic</a>
          </div>
        </li>-->
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="res.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tickets
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="air.html">Air Ticket</a>
            <a class="dropdown-item" href="bus.html">Bus Ticket</a>
            <a class="dropdown-item" href="car.html">Rent A Car</a>
          </div>
        </li> -->
        <li class="nav-item">
          <?php if(empty($_SESSION['id'])):?>
          <a class="nav-link" href="login.html">Login</a>
        <?php else: ?>
          <a class="nav-link" href="logout.php">Logout</a>
        <?php endif;?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registration.php">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cwe.html"></a>
        </li>
        <li class="nav-item">
          <?php if(empty($_SESSION['id'])): ?>
          <?php else:?>
          <a class="nav-link" href="user.php">
            <?php
                if(empty($_SESSION['userdb'])){
                }else{
                echo "Welcome ". $_SESSION['userdb'];
              }
              ?>
          </a>
        <?php endif;?>
        </li>
      </ul>
    </div>
  </nav>
  </div>

<div ng-app="">
        <div class="container-fluid">
          <div class="row reg-container">
            <div class="col-md-7 text-info">
              <form method="POST" action="reg.php">
                <?php
                  if(empty($_SESSION['id'])){
                  }else{
                    if(empty($_SESSION['msg'])){

                    }else{
                    echo $_SESSION['msg'];
                    session_unset();
                    session_destroy();
                  }
                  }
                ?>
                <h3 class="text-center text-info"> Registration Form</h3>
                  <div class="reg-form-container">
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label> First Name </label>
                        <input type="text" class="form-control" name="fname" placeholder="First Name" ng-model="fname" autocomplete="off">
                      </div>
                      <div class="col-md-6 form-group">
                        <label> Last Name </label>
                        <input class="form-control" type="text" name="lname" placeholder="Last Name" ng-model="lname" autocomplete="off">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col">
                        <label> Username </label>
                        <input class="form-control" type="text" placeholder="username" name="username" ng-model="username" autocomplete="off">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6  form-group">
                        <label> Password </label>
                        <input class="form-control" type="password" placeholder="password" name="pwd" ng-model="pwd">
                      </div>
                      <div class="col-md-6  form-group">
                          <label> Confirm Password </label>
                          <input  class="form-control" type="password" placeholder="confirm password" name="cpwd" ng-model="cpwd">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col">
                        <label> E-Mail </label>
                        <input class="form-control" type="text" placeholder="example@host.com" name="email" ng-model="email" autocomplete="off">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col">
                        <label> Phone No </label>
                        <input class="form-control" type="number" placeholder="+9853165497" name="phone" ng-model="phone" autocomplete="off">
                      </div>
                      <div class="col">
                        <label> Date Of Birth </label>
                        <input class="form-control" type="date" placeholder="DOB" name="date" ng-model="date">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col">
                        <label> Gender </label>
                      </div>
                      <div class="col">
                        <input class="form-check-input" type="radio" name="gender" value="Male" ng-model="gender"> Male
                      </div>
                      <div class="col">
                        <input class="form-check-input" type="radio" name="gender" value="Female" ng-model="gender"> Female
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col">
                        <label> Address </label>
                      </div>
                      <div class="col">
                        <textarea class="form-control" type="text" placeholder="House No" rows="2" name="houseno" ng-model="houseno"></textarea>
                      </div>
                      <div class="col">
                        <textarea class="form-control" type="text" placeholder="Road No" rows="2" name="roadno" ng-model="roadno"></textarea>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-4">
                        <label> City </label>
                      </div>
                      <div class="col-md-6">
                        <select class="form-control" name="city" ng-model="city">
                          <option value="">--</option>
                          <option value="dhaka">Dhaka</option>
                          <option value="gazipur">Gazipur</option>
                          <option value="mymensingh">Mymensingh</option>
                          <option value="rajshahi">Rajshahi</option>
                          <option value="ctg">Chittagong</option>
                          <option value="khulna">Khulna</option>
                          <option value="barisal">Barisal</option>
                        </select>
                      </div>
                    </div>
                    <div class="row form-check-inline">
                      <div class="col-md-10">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="agree" name="agree">I agree to all the terms and condition and hereby declare that the above information is true.
                        </label>
                      </div>
                    </div><br><br>
                      <div class="row form-group">
                        <div class="col">
                          <button type="submit" class="form-control btn btn-primary">Submit</button>
                        </div>
                      </div>
                  </div>
              </form>
            </div>

            <div class="col-md-5">
              <div class="row text-primary">
                <h3> Registration Validity </h3>
              </div>
                <div class="row">
                  <div class="col">
                    <ul class="text-danger">
                      <li>All the fields are required.</li>
                      <li>First name Last name must strat with letter<br>They can't contain neumeric values.</li>
                      <li>Username must start with letter<br>Atleast have two letter.</li>
                      <li>Password should be minimum 8 charactet long.<br>Must contain at least 1 special character. For ex: !,@,%,*,$</li>
                      <li>Email should be valided.</li>
                    </ul>
                </div>
                </div>

              <div class="">
                <h3> Registration Review Before Submit</h3>
                <label class="text-success"> First Name {{fname}} </label><br>
                <label class="text-success"> Last Name {{lname}} </label><br>
                <label class="text-success"> Username {{username}} </label><br>
                <label class="text-success"> Password {{pwd}} </label><br>
                <label class="text-success"> Confirm Password {{cpwd}} </label><br>
                <label class="text-success"> Email Address {{email}} </label><br>
                <label class="text-success"> Phone No {{phone}} </label><br>
                <label class="text-success"> Gender {{gender}}</label><br>
                <label class="text-success"> Date of birth {{date}} </label><br><br>
                <label class="text-success"> Address House No: {{houseno}} Road No: {{roadno}} </label><br>
                <label class="text-success"> City {{city}} </label>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>

</html>
