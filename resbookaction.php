<?php
  session_start();

  function resbook(){
    require('mysqlconnection.php');
    $bookingname = $_POST['resbookname'];
    $resid = $_SESSION['resid'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $nofppl = $_POST['numberofppl'];

    $sql = "INSERT INTO `resbook`(`resbookname`, `resid`, `date`, `time`, `numberofppl`)
      VALUES ('$bookingname','$resid','$date','$time','$nofppl')";

      if($conn->query($sql) === TRUE){
        echo "Congratulation..";
      }else{
        echo "Error: ". $sql . "<br>" . $conn->error;
      }

  $conn->close();
}

function check(){
  if(isset($_POST['submit'])){
    if(empty($_POST['resbookname'])){
      echo "Booking Name Required.";
    }
    else if(empty($_POST['numberofppl'])){
      echo "Number Of People Required";
    }
    else if(empty($_POST['date'])){
      echo "Date Required";
    }
    else if(empty($_POST['time'])){
      echo "Time Required.";
    }else{
      resbook();
      header('location:res.php');
    }
  }else{
    echo "Error";
  }
}

check();
?>
