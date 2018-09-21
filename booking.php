<?php
session_start();

function payment(){
  $unpaid = "unpaid";
  $method = $_POST['pm'];
  require('mysqlconnection.php');
  $sql = "INSERT INTO `payment`(`status`, `method`)
        VALUES ('$unpaid','$method')";
        if($conn->query($sql) === TRUE){
          echo "Congratulation..";
        }else{
          echo "Error: ". $sql . "<br>" . $conn->error;
        }

        $conn->close();
}

function getPyment(){


  require('mysqlconnection.php');
  $sql = "SELECT `paymentid` FROM `payment`";
  $result = $conn->query($sql);

    if($result->num_rows>0){
      while($row = $result->fetch_assoc()){
        $_SESSION['paymentid'] = $row['paymentid'];
      }
    }
}
function bookdb(){
  $userid = $_SESSION['uiddb'];
  $packageid = $_SESSION['pid'];
  $paymentid =  $_SESSION['paymentid'];
  $bname = $_POST['bname'];
  $nofadult = $_POST['nop'];

  if(empty($_POST['twc'])){
    $twc = "No";
  }else{
    $twc = $_POST['twc'];
  }
  $groupage = $_POST['gagep'];
  $loa = $_POST['loa'];
  $other = $_POST['other'];
  $sop =  $_POST['sop'];

  require('mysqlconnection.php');
  $sql = "INSERT INTO `booking`(`userid`, `packageid`, `paymentid`, `bookingname`, `nofadult`, `travelwithchildren`, `groupage`, `levelofaccomodation`, `others`, `stageofplanning`)
    VALUES ('$userid','$packageid','$paymentid','$bname','$nofadult','$twc','$groupage','$loa','$other','$sop')";

    if($conn->query($sql) === TRUE){
      echo "Congratulation..";
    }else{
      echo "Error: ". $sql . "<br>" . $conn->error;
    }

    $conn->close();

}

function check(){
  if(empty($_POST['bname'])){
    echo "Booking Name Required.";
  }
  else if(empty($_POST['bname'])){
    echo "Booking Name Required.";
  }
  else if(empty($_POST['nop'])){
    echo "Number Of Person Required.";
  }
  else if(empty($_POST['loa'])){
    echo "Level Of Accomodation Required.";
  }
  else if(empty($_POST['pm'])){
    echo "Payment Method Required.";
  }
 else  if(empty($_POST['sop'])){
    echo "Stage Of Plannig Required.";
  }else{
    payment();
    getPyment();
    bookdb();
  }
}

if(empty($_SESSION['id'])){
  echo 'Please Login To Booking.';
  header('refresh:3,login.html');
}else{
  check();
  $_SESSION['msg'] = "Booking Successfull";
  header('location:bookinginfo.php');
}


?>
