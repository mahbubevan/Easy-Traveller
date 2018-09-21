<?php
  session_start();
  $_SESSION['resid'] = $_GET['resid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome Traveller</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/plist.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <h3 class="text-info text-center"> Booking Details </h3>
    <form action="resbookaction.php" method="POST">
      <div class="row form-group">
        <div class="col">
          <label> Booking name as </label>
          <input class="form-control" type="text" name="resbookname" placeholder="Give a name">
        </div>
        <div class="col">
          <label> Selected Restaurant: </label>
          <?php $_SESSION['resname']=$_GET['resname'];?>
          <input class="form-control" disabled placeholder="<?php echo $_SESSION['resname']?>">
        </div>
      </div>
      <div class="row form-group">
        <div class="col">
          <label> Number Of Person </label>
          <input class="form-control" type="number" name="numberofppl" placeholder="Number of person">
        </div>
        <div class="col">
          <label> Date you want to come. </label>
          <input class="form-control" type="date" name="date" >
        </div>
      </div>
      <div class="row form-group">
        <div class="col">
          <label> Time you want to come. </label>
          <input class="form-control" type="time" name="time">
        </div>
        <div class="col">

        </div>
      </div>
      <div class="row">
        <div class="col form-group">
          <button type="submit" class="form-control btn btn-danger" name="submit" value="booknow">Book Now</button>
        </div>
      </div>
    </form>
  </div>

  <script>
  $(document).ready(function(){

  });

  </script>
</body>
</html>
