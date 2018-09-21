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
  <link rel="stylesheet" href="css/plist.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <h3 class="text-info text-center"> Booking Details </h3>
    <form action="booking.php" method="POST">
      <div class="row form-group">
        <div class="col">
          <label> Booking name as </label>
          <input class="form-control" type="text" name="bname" placeholder="Give a name">
        </div>
        <div class="col">
          <label> Selected package id </label>
          <?php echo $_GET['pid']; $_SESSION['pid']=$_GET['pid'];?>
        </div>
      </div>
      <div class="row form-group">
        <div class="col">
          <label> Number Of Person </label>
          <input class="form-control" type="number" name="nop" placeholder="Number of person">
        </div>
          <div class="col form-check-inline">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="y" name="twc">Travelling With Children ?
            </label>
          </div>
      </div>
      <div class="row form-group">
        <div class="col">
          <label> Age range of group </label><br>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="20-30" name="gagep">20-30
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="30-40" name="gagep">30-40
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="40-50" name="gagep">40-50
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="50-60" name="gagep">50-60
            </label>
          </div>
        </div>
        <div class="col">
          <label> Level Of Accomodation </label><br>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="five star" name="loa">5 star
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="four star" name="loa">4 star
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="three star" name="loa">3 star
            </label>
          </div>
        </div>

      </div>

      <div class="row form-group">
        <div class="col">
          <label> Stage Of Plannig </label>
          <select name="sop" class="form-control">
            <option value="">--</option>
            <option value="Thinking Not Sure">Thinking Not Sure</option>
            <option value="I will go, but where to go ?">I will go, but where to go ?</option>
            <option value="I am prepare, just want to make this happen">I am prepare, just want to make this happen</option>
          </select>
        </div>
        <div class="col">
          <label> Others </label><br>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="Activities" name="other">Activities
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="Tour Guide" name="other">Tour Guide
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="Other Transportaion" name="other">Other Transportaion
            </label>
          </div>
        </div>
      </div>
      <div class="row form-group">
        <div class="col">
          <label> Payment Method </label>
          <select class="form-control" name="pm" id="pm">
            <option value="">---</option>
            <option value="Visa">Visa Card</option>
            <option value="Master Card">Master Card</option>
            <option value="Nexus">DBBL Nexus</option>
            <option value="Bkash">BKash</option>
            <option value="Rocket">Dutch Bangla Rocket</option>
            <option value="Payment Slip">Payment Slip</option>
            <option value="Payment Office">Payment At Office</option>
          </select>
        </div>
      </div>
      <div class="row form-group">
        <div class="col">
          <div class="htmlcontent" style="display:none;">'
              <input type="text" value="" placeholder="Payment Method" name="pmethod">
          </div>
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
