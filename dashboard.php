<?php
  require('mysqlconnection.php');
  $sql1 = "SELECT COUNT(*) FROM user ";
  $sql2 = "SELECT COUNT(*) FROM booking ";
  $sql3 = "SELECT COUNT(*) FROM package ";
  $sql4 = "SELECT COUNT(*) FROM resinfo ";
  $sql5 = "SELECT COUNT(*) FROM payment ";
  $sql6 = "SELECT COUNT(*) FROM payment where status='paid'";

  $results1 = mysqli_query($conn,$sql1);
  $row1 = mysqli_fetch_array($results1,MYSQLI_NUM);

  $results2 = mysqli_query($conn,$sql2);
  $row2 = mysqli_fetch_array($results2,MYSQLI_NUM);

  $results3 = mysqli_query($conn,$sql3);
  $row3 = mysqli_fetch_array($results3,MYSQLI_NUM);

  $results4 = mysqli_query($conn,$sql4);
  $row4 = mysqli_fetch_array($results4,MYSQLI_NUM);

  $results5 = mysqli_query($conn,$sql5);
  $row5 = mysqli_fetch_array($results5,MYSQLI_NUM);

  $results6 = mysqli_query($conn,$sql6);
  $row6 = mysqli_fetch_array($results6,MYSQLI_NUM);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome Traveller</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/admin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <br><br>
    <div class="row">
      <div class="col">
        <div class="rcorners1">
          <h3><strong>Total User</strong></h3>
              <h1><?php echo $row1[0]; ?></h1>
          </div>
        </div>
        <div class="col">
          <div class="rcorners2" >
          <h3><strong>Total Booking Count</strong></h3>
              <h1><?php echo $row2[0]; ?></h1>
            </div>
      </div>
    </div><br><br>
    <div class="row">
      <div class="col">
        <div class="rcorners1">
          <h3><strong>Package Available</strong></h3>
              <h1><?php echo $row3[0]; ?></h1>
          </div>
        </div>
        <div class="col">
          <div class="rcorners2" >
          <h3><strong>Restaurant Available</strong></h3>
              <h1><?php echo $row4[0]; ?></h1>
            </div>
      </div>
    </div><br><br>
    <div class="row">
      <div class="col">
        <div class="rcorners1">
          <h3><strong>Payment Request</strong></h3>
              <h1><?php echo $row5[0]; ?></h1>
          </div>
        </div>
        <div class="col">
          <div class="rcorners2" >
          <h3><strong>Paid</strong></h3>
              <h1><?php echo $row6[0]; ?></h1>
            </div>
      </div>
    </div>
    <br><br><br>
    <div class="row">
      <div class="col">
        <a href="admininfo.php" target="iframe_b">
          <div class="">
            <h2>
               Admin Info
            </h2>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="userinfo.php" target="iframe_b">
          <div class="">
            <h2>
               User Info
            </h2>
          </div>
        </a>
      </div>

    </div>
    <div class="row">
      <iframe src="admininfo.php" name="iframe_b"></iframe>
    </div>
  </div>
</body>
</html>
