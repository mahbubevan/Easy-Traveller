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
  <link rel="stylesheet" href="css/style.css">
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
      <!-- <li class="nav-item">
        <a class="nav-link" href="about.html">About US</a>
      </li> -->
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
      <!-- <li class="nav-item dropdown"> -->
        <!-- <a class="nav-link dropdown-toggle" href="res.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
          <!-- Tickets -->
        <!-- </a> -->
        <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> -->
          <!--<a class="dropdown-item" href="air.html">Air Ticket</a>-->
          <!-- <a class="dropdown-item" href="bus.html">Bus Ticket</a> -->
          <!--<a class="dropdown-item" href="car.html">Rent A Car</a>-->
        <!-- </div> -->
      <!-- </li> -->
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

<div class=" carousel-section">

  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="img/slide1.jpg" alt="Los Angeles" class="img-fluid">

      <div class="carousel-caption cc-1">
        <h3 class="text-warning">Beautiful Maldeves</h3>
        <a href="tour.php" class="btn btn-info" role="button">Tour Packages</a>
        <!--<a href="#" class="btn btn-info" role="button">Tour Planning</a>
        <a href="#" class="btn btn-info" role="button">Talk With Experts</a>-->
      </div>
    </div>

    <div class="carousel-item">
      <img src="img/slide2.png" alt="Chicago" class="img-fluid">
      <div class="carousel-caption">
        <h3 class="text-warning">Easy To Get Things In One Place</h3>
        <a href="Hotel.html" class="btn btn-info" role="button">Hotel</a>
        <a href="res.php" class="btn btn-info" role="button">Restaurants</a>
        <!--<a href="#" class="btn btn-info" role="button">Tour Guide</a>
        <a href="#" class="btn btn-info" role="button">World Tour Map</a>-->
      </div>
    </div>

    <div class="carousel-item">
      <img src="img/slide3.jpg" alt="New York" class="img-fluid">
      <div class="carousel-caption">
        <h3 class="text-warning">Manage Your Tickets & Vehicle</h3>
        <!--<a href="#" class="btn btn-info" role="button">Air Ticket</a>-->
        <a href="bus.html" class="btn btn-info" role="button">Bus Ticket</a>
        <!--<a href="#" class="btn btn-info" role="button">Train Ticket</a>
        <a href="#" class="btn btn-info" role="button">Rent A Car</a>-->
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</div>


<!-- <div class="container-fluid featured-section">

    <div class="container gallery-container">

    <h1 class="text-center">Featured Tours</h1>

    <p class="page-description text-center">Offers Now Available</p>

    <div class="gallery">

        <div class="row mb-3">
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="#">
                    <img src="img/Kashmir.jpg" alt="Park" class="card-img-top">
                      <div class="card-body">
                        <h4 class="card-title">Beautiful Kashmir</h4>
                        <p class="card-text">3 Days 2 Night</p>
                        <p class="card-text">35000 Taka</p>
                      </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="#">
                    <img src="img/Bhutan.jpg" alt="Park" class="card-img-top">
                    <div class="card-body">
                      <h4 class="card-title">Bhutan</h4>
                      <p class="card-text">3 Days 2 Night</p>
                      <p class="card-text">35000 Taka</p>
                    </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="#">
                    <img src="img/safari1.jpg" alt="Park" class="card-img-top">
                    <div class="card-body">
                      <h4 class="card-title">African Safari</h4>
                      <p class="card-text">3 Days 2 Night</p>
                      <p class="card-text">35000 Taka</p>
                    </div>
                    </a>
                </div>
            </div>
        </div>
          <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="#">
                    <img src="img/safari2.jpg" alt="Park" class="card-img-top">
                    <div class="card-body">
                      <h4 class="card-title">African Safari || Night</h4>
                      <p class="card-text">3 Days 2 Night</p>
                      <p class="card-text">35000 Taka</p>
                    </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="#">
                    <img src="img/Sonadia-Dip.jpg" alt="Park" class="card-img-top">
                    <div class="card-body">
                      <h4 class="card-title">Sonadia Dip || Chittagong</h4>
                      <p class="card-text">3 Days 2 Night</p>
                      <p class="card-text">35000 Taka</p>
                    </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="#">
                    <img src="img/Kashmir.jpg" alt="Park" class="card-img-top">
                    <div class="card-body">
                      <h4 class="card-title">Seint Martin</h4>
                      <p class="card-text">3 Days 2 Night</p>
                      <p class="card-text">35000 Taka</p>
                    </div>
                    </a>
                </div>
            </div>

        </div>

    </div>

  </div>


</div> -->

<hr/>
<div class="tour-section container-fluid">
  <h1 class="text-success text-center">Luxury Tours, Vacations & African Safaris</h1>

    <div class="card-deck">
      <div class="card">
        <div class="card-body ">
          <h5 class="card-text">African Safari Tours</h5>
          <p><a href="ProjectTask/1st/First.html" class="lightbox"> African Safari</a></p>
          <p><a href="ProjectTask/2nd/Second.html" class="lightbox"> South Africa Safari</a></p>
          <p><a href="ProjectTask/3rd/third.html" class="lightbox"> Tanzania Safari</a></p>
          <p><a href="ProjectTask/4Th/fourth.html" class="lightbox"> Kenya Safari</a></p>
          <p><a href="ProjectTask/5th/fifth.html" class="lightbox"> Bootswana Safari</a></p>
          <p><a href="ProjectTask/6th/Sixths.html" class="lightbox"> Zambia Safari</a></p>
        </div>
      </div>
      <div class="card ">
        <div class="card-body ">
          <h5 class="card-text">European Tours</h5>
          <p><a href="ProjectTask/7Th/seventh.html" class="lightbox"> Italy Tour</a></p>
          <p><a href="ProjectTask/8th/eighth.html" class="lightbox"> Greece Tour</a></p>
          <p><a href="ProjectTask/9th/nine.html" class="lightbox"> Spain Tour</a></p>
          <p><a href="ProjectTask/10th/ten.html" class="lightbox"> France Tour</a></p>
          <p><a href="ProjectTask/11th/eleven.html" class="lightbox"> UK Tour</a></p>
          <p><a href="ProjectTask/12th/twelvth.html" class="lightbox"> Ireland Tour</a></p>
          <p><a href="ProjectTask/13th/thirteenth.html" class="lightbox"> Croatia Tour</a></p>
        </div>
      </div>
      <div class="card ">
        <div class="card-body ">
          <h5 class="card-text">Australia & New Zealand Tour</h5>
          <p><a href="ProjectTask/14th/fourteenth.html" class="lightbox"> Australia Tour</a></p>
          <p><a href="ProjectTask/15th/fifteenth.html" class="lightbox"> New Zealand Tours</a></p>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-text">Asia Tours</h5>
          <p><a href="ProjectTask/16Th/sixteenth.html" class="lightbox"> India Tour</a></p>
          <p><a href="ProjectTask/17th/seventeen.html" class="lightbox"> China Tour</a></p>
          <p><a href="ProjectTask/18th/eighteen.html" class="lightbox"> Vietnam Tour</a></p>
          <p><a href="ProjectTask/19th/ninteen.html" class="lightbox"> Thailand Tour</a></p>
        </div>
      </div>

      <!-- <div class="card">
        <div class="card-body">
          <h5 class="card-text">Middle East Tours</h5>
          <p><a href="ProjectTask/1st/First.html" class="lightbox"> Turkey Tour</a></p>
          <p><a href="ProjectTask/1st/First.html" class="lightbox"> Israel Tour</a></p>
        </div>
      </div> -->
  </div>

</div>

<div class="php-content">

  <?php


  #if(empty($_SESSION['id'])){

  #}else{
  #  echo $_SESSION['id'] ."<br>";
  #  echo $_SESSION['firstname']. " <br>";
  #  echo $_SESSION['lastname']. " <br>";
  #}
  ?>
</div>


<div class="footer container-fluid" id="footer">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3> Links </h3>
        <p> <a href="https://www.hotels.com/" class="lightbox2">Hotels </a></p>
        <p> <a href="https://www.cheapflights.com/" class="lightbox2">Flights </a></p>
        <p> <a href="https://www.taketours.com/" class="lightbox2">Tours </a></p>
        <p> <a href="https://transportation.nd.edu/services/vehicle-rental/" class="lightbox2">Transportation </a></p>
        <p> <a href="https://eventacademy.com/news/what-is-event-management/" class="lightbox2">Events</a></p>
      </div>
      <div class="col">
        <h3> Popular Hotels </h3>
        <p> <a href="https://www.hotelscombined.com/Place/Coxs_Bazar_1.htm?date=SundayFortnight&gclid=Cj0KCQjwlK7cBRCnARIsAJiE3MgzigjoOz0taSLtK0ecg4vk4Dr4EmcrotDTZtBLLGw_F-lAn3C6irkaAtOVEALw_wcB&gclsrc=aw.ds" class="lightbox2">Cox's Bazar</a></p>
        <p> <a href="https://www.tripadvisor.com/Hotels-g3396905-Saint_Martin_s_Island_Chittagong_Division-Hotels.html" class="lightbox2">Saint Martin</a></p>
        <p> <a href="https://www.booking.com/city/bd/dhaka.html" class="lightbox2">Dhaka</a></p>
        <p> <a href="https://www.tripadvisor.com/Hotels-g667998-Rajshahi_City_Rajshahi_Division-Hotels.html" class="lightbox2">Rajsahhi</a></p>
        <p> <a href="https://www.tripadvisor.com/Hotels-g319837-Chittagong_City_Chittagong_Division-Hotels.html" class="lightbox2">Chittagong</a></p>
      </div>
      <div class="col">
        <h3> Tour Packages </h3>
        <p> <a href="#" class="lightbox2">Cox's Bazar</a></p>
        <p> <a href="#" class="lightbox2">Saint Martin</a></p>
        <p> <a href="#" class="lightbox2">Bandarban</a></p>
        <p> <a href="#" class="lightbox2">Kuakata</a></p>
        <p> <a href="#" class="lightbox2">Sajek</a></p>
      </div>
    </div>
  </div>
  <hr style="border-color:white">
  <div class="row">
    <div class="col"><p><a href="#" class="lightbox2"> About Us </a></p></div>
    <div class="col"><p><a href="#"  class="lightbox2"> Terms & Conditions</a></p> </div>
    <div class="col"> <p><a href="#"  class="lightbox2"> Privacy & Policy</a></p> </div>
    <div class="col"><p><a href="#"  class="lightbox2">FAQ</a></p> </div>
    <div class="col"><p><a href="#"  class="lightbox2"> Press Room</a></p> </div>
    <div class="col"><p><a href="#"  class="lightbox2"> Career</a></p> </div>
    <div class="col"><p><a href="#"  class="lightbox2"> Travel/Visa</a></p> </div>
    <div class="col"><p><a href="#"  class="lightbox2"> Easy Traveller</a></p> </div>
    <div class="col"><p><a href="#"  class="lightbox2"> Vender Partners</a></p> </div>
    <div class="col"><p><a href="#"  class="lightbox2"> Contact Us</a></p> </div>
    <div class="col"><p><a href="#"  class="lightbox2"> Photo Gallery</a></p> </div>
    <div class="col"><p><a href="#"  class="lightbox2"> Customer Query</a> </p> </div>

  </div>

  <div class="row">
    <div class="col-md-12">
      <h6 class="text-center"> Copyright 2018, All rights reserved www.easytraveller.com </h6>
    </div>
  </div>
</div>



<script>

</script>
</body>
</html>
