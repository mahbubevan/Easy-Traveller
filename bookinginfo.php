<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome Traveller</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" media="all">
  <link rel="stylesheet" href="css/bookinginfo.css">
  <link rel="stylesheet" href="css/bookinginfo1.css" media="print" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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

  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="text-center text-success"> Your Booking Info </h3>
        <div class="row book-info">
          <?php
          require('mysqlconnection.php');

          $bookid="";
          $userid =$_SESSION['uiddb'];
          $packageid = "";
          $paymentid = "";
          $bookingname = "";
          $nofadult="";
          $twc = "";
          $gage ="";
          $loa ="";
          $other = "";
          $sop = "";
          $packagename="";
          $details = "";
          $availabledate="";
          $cost = "";
          $status = "";
          $method = "";
          $email ="";
          $phoneno = "";
          $username = "";
          $address = "";

          $sql = "SELECT `booking`.`bookingid`,`booking`.`bookingname` , `user`.`username`, `user`.`email`,`user`.`phoneno`,`user`.`address`,
                `package`.`packagename`,`package`.`packageid`,
                `payment`.`paymentid`,`payment`.`method`,`payment`.`status`,`booking`.`nofadult`,`booking`.`travelwithchildren`,`booking`.`groupage`,`booking`.`levelofaccomodation`,`booking`.`others`,`booking`.`stageofplanning`,
                 `package`.`details`,`package`.`availabledate`,`package`.`cost`
                  FROM ((( `booking`
                 INNER JOIN `user` ON `booking`.`userid` = `user`.`userid`)
                 INNER JOIN `package` ON `booking`.`packageid` = `package`.`packageid`)
                 INNER JOIN `payment` ON  `booking`.`paymentid` = `payment`.`paymentid`) WHERE `user`.`userid`='$userid'";

          $result = $conn->query($sql);
          #echo $result;
          #echo "number of rows: " . $result->num_rows;
          if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
              $bookid = $row['bookingid'];
              $bookingname = $row['bookingname'];
              $nofadult = $row['nofadult'];
              $twc = $row['travelwithchildren'];
              $gage = $row['groupage'];
              $loa = $row['levelofaccomodation'];
              $other = $row['others'];
              $packagename = $row['packagename'];
              $details = $row['details'];
              $availabledate = $row['availabledate'];
              $cost = $row['cost'];
              $status = $row['status'];
              $method = $row['method'];
              $email = $row['email'];
              $phoneno = $row['phoneno'];
              $address = $row['address'];
              $packageid = $row['packageid'];
              $paymentid = $row['paymentid'];

              echo '
                <div class="row book-info">
                  <div style="width:100%">
                    <div class="col-md-8" id="bookinfo" style="width:100%;height:auto;">
                      <p class="" >Booking Id: '.$bookid.'</p>
                      <p class="text-info">Booking Name: '.$bookingname.'</p>
                      <p class="text-info">Number Of Person: '.$nofadult.'</p>
                      <p class="text-info">Traveling with children: '.$twc.'</p>
                      <p class="text-info">Age range of your group: '.$gage.'</p>
                      <p class="text-info">Level Of Accomodation: '.$loa.'</p>
                      <p class="text-info">Other Help: '.$other.'</p>
                      <p class="text-info">Package Name: '.$packagename.'</p>
                      <p class="text-info">Details: '.$details.'</p>
                      <p class="text-info">Date Of Journey: '.$availabledate.'</p>
                      <p class="text-info">Cost(Excluding your personal expense): '.$cost.'</p>
                      <p class="text-info">Payment Id: '.$paymentid.'</p>
                      <p class="text-info">Payment Method: '.$method.'</p>
                      <p class="text-info">Payment Status: '.$status.'</p>
                      <p class="text-info">Email Of Contact: '.$email.'</p>
                      <p class="text-info">Phone No: '.$phoneno.'</p>
                      <p class="text-info">Address: '.$address.'</p>

                      <div class="download-button">
                          <form class="no-print">
                            <input type="button"  class="btn btn-success" value="Print" onClick="myprint(bookinfo)">
                        </form>
                      </div>
                    </div>
                  </div><br><br>
                </div>
              ';
            }
          }


      ?>
        </div>
      </div>

    </div>
  </div>

  <script src='dist/jspdf.min.js'></script>
  <script src='dist/jspdf.debug.js'></script>
  <script src="plugins/from_html.js"></script>
  <script src="js/index.js"></script>
  <script src="js/print.js"></script>
</body>
</html>
