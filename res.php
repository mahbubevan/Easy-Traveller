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
  <link rel="stylesheet" href="css/res.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
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

  <?php
  require('mysqlconnection.php');

      echo '<div class="container">';
      echo '<div class="row card-height">';
           $sql = "SELECT * FROM `resinfo`";
            $result = $conn->query($sql);
              if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                  echo '
                    <div class="col">
                    <div class="card" style="width:400px;height:auto;">
                      <img class="card-img-top img-fluid" src="restaurant/'.$row['img'].'" alt="Card image">
                      <div class="card-body">
                        <form action="resbook.php" method="GET">
                          <h4 class="card-title">'. $row['resid'].' '. $row['resname'] .'</h4>
                          <p class="card-text">'. $row['reslocation'].'</p>
                          <p class="card-text">'. $row['rescost'].'</p>
                          <p class="card-text">'. $row['specialfood'].'</p>
                          <p class="card-text">'. $row['restype'].'</p>
                          <button type="submit" name="bsubmit" class="btn btn-primary">Booking Now</button>
                          <a href="#" class="btn btn-info">Contact With Us</a>
                          <input type="hidden" name="resname" value="'.$row['resname'].'">
                          <input type="hidden" name="resid" value="'.$row['resid'].'">
                        </form>

                      </div>
                    </div><br>

                    </div>
                  ';
                }
              }

        echo '</div>';
      echo '</div>';
  ?>



</body>




</html>
