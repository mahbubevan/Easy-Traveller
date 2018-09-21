<?php

function submitData(){
  if(empty($_POST['submit'])){
    echo "Do Right Way";
  }else{
    $target = "uploads/".basename($_FILES['image']['name']);
    require('mysqlconnection.php');

    $pname = $_POST['pname'];
    $details = $_POST['text'];
    $dates = $_POST['date'];
    $cost = $_POST['number'];
    $image = $_FILES['image']['name'];

    $sql = "INSERT INTO `package`(`packagename`, `details`, `availabledate`, `cost`, `img`)
        VALUES ('$pname','$details','$dates','$cost','$image')";

    if($conn->query($sql)===TRUE){
      echo "Package Added";
      header('refresh:3,package.html');
    }else{
      echo "Error: ". $sql . "<br>" . $conn->error;
    }
  $conn->close();

  if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){

  }else{
    echo "Error Uploading";
  }
}


}

  if(empty($_POST['pname'])){
    echo "Fill Package Name";
  }
  else if(empty($_POST['text'])){
    echo "Fill Details";
  }
  else if(empty($_POST['date'])){
    echo "Date Require";
  }
  else if(empty($_POST['number'])){
    echo "Cost Require";
  }
  else{
    submitData();
  }
?>
