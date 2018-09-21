<?php
  session_start();
  if(empty($_SESSION['id'])){
    header('location:index.php');
  }else{
}

function addRes(){
  require('mysqlconnection.php');
  $target = "restaurant/".basename($_FILES['image']['name']);

  $rname = $_POST['rname'];
  $loc = $_POST['rlocation'];
  $cost = $_POST['rcost'];
  $sf = $_POST['sf'];
  $image = $_FILES['image']['name'];
  $restype = $_POST['rtype'];

  $sql = "INSERT INTO `resinfo`(`resname`, `reslocation`, `rescost`, `specialfood`, `img`,`restype`)
      VALUES ('$rname','$loc','$cost','$sf','$image','$restype')";

  if($conn->query($sql)===TRUE){
    echo "New Restaurant Added";
    header('refresh:3,addres.php');
  }else{
    echo "Error: ". $sql . "<br>". $conn->error;
  }
  $conn->close();

  if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){

  }else{
    echo "Error Uploading";
  }
}

if(isset($_POST['submit'])){

  if(empty($_POST['rname'])){
    echo "Required Restaurant Name";
  }
  else if(empty($_POST['rlocation'])){
    echo "Location Needed.";
  }
  else if(empty($_POST['rcost'])){
    echo "Price Needed.";
  }
  else if(empty($_POST['sf'])){
    echo "Special Food Required.";
  }
  else if(empty($_POST['rtype'])){
    echo "Restaurant Country Required.";
  }
  else{
    addRes();
  }
}else{

}

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
      <form method="POST" action="" enctype="multipart/form-data">
          <div class="package-form">
            <div class="form-group row">
              <label class="col-2 col-form-label text-primary">Restaurant Name</label>
              <div class="col-5">
                <input class="form-control" type="text" name="rname">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-2 col-form-label text-primary">Restaurant Location</label>
              <div class="col-5">
                <textarea class="form-control" rows="3" name="rlocation"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-2 col-form-label text-primary">Average Cost</label>
              <div class="col-5">
                <input class="form-control" type="number" name="rcost">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-2 col-form-label text-primary">Special Food</label>
              <div class="col-5">
                <input class="form-control" type="text" name="sf">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-2 col-form-label text-primary">Restaurant Type</label>
              <div class="col-5">
                <input class="form-control" type="text" name="rtype" placeholder="Domestic/International">
              </div>
            </div>
            <div class="row">
              <label class="col-2 col-form-label text-primary">Cover Image</label>
              <div class="col-5">
                <input class="" type="file" name="image">
              </div>
            </div>
            <div class="row">
              <input type="submit" class="btn btn-info" value="Add New Restaurant" name="submit">
            </div>

          </div>
      </form>
    </div>
 </body>

</html>
