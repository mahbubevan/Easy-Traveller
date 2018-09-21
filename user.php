<?php
  session_start();
  if(empty($_SESSION['id'])){
    require('logout.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome Traveller</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/user.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
  <body>

    <div class="">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-custom">
      <a class="navbar-brand" href="#">Easy Traveller</a>
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

<div class="container-fluid text-modify">
      <div class="container">
        <h2 class="text-center heading text-dark">
          <?php
              if(empty($_SESSION['id'])){
                header('location:login.html');
              }
              else{
                  echo "Welcome"." ".$_SESSION['userdb'];
              }
          ?>

        </h2>
      </div>
      <div class="card-columns">
        <a href="tour.php">
          <div class="card available-package">
            <div class="card-body text-center ">
              <p class="card-text ">Available Packages</p>
            </div>
          </div>
        </a>
        <a href="bookinginfo.php">
        <div class="card ">
          <div class="card-body text-center">
            <p class="card-text">Booking Info</p>
          </div>
        </div>
      </a>
      <a href="res.php">
        <div class="card ">
          <div class="card-body text-center">
            <p class="card-text">Restaurants Booking</p>
          </div>
        </div>
      </a>
      <a href="editprofile.php">
        <div class="card ">
          <div class="card-body text-center">
            <p class="card-text">Edit Profile</p>
          </div>
        </div>
      </a>

      <a href="logout.php">
        <div class="card ">
          <div class="card-body text-center">
            <p class="card-text">Logout</p>
          </div>
        </div>
      </a>
      </div>



    </div>

  </body>
</html>
