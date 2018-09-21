<?php
  session_start();
  if(empty($_SESSION['id'])){
    header('location:index.php');
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


<?php
  require('mysqlconnection.php');
  $sql = "SELECT * FROM `booking` ";
  $result = $conn->query($sql);

  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){

      echo '<ul class="list-group font-weight-bold text-monospace">
        <li class="list-group-item"> Booking Id: '. $row['bookingid'].'</li>
        <li class="list-group-item"> User Id: '. $row['userid'].' PckageId: '.$row['packageid'].'  </li>
        <li class="list-group-item"> Booking Name: '. $row['bookingname'].' </li>
        <li class="list-group-item"> Number Of Person: '. $row['nofadult'].' </li>
        <li class="list-group-item"> Travel With Children: '. $row['travelwithchildren'].' </li>
        <li class="list-group-item"> Age Range: '. $row['groupage'].'</li>
        <li class="list-group-item"> Level Of Accomodation: '. $row['levelofaccomodation'].'</li>
        <li class="list-group-item"> Others Requirement:  '. $row['others'].'</li>
        <li class="list-group-item"> Stage Of Planning:  '. $row['stageofplanning'].'</li>
      </ul>'."<br>";

    }
  }

?>
