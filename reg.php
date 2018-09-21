<?php

$flag = 0;


function dbreg(){
  session_start();
  if(empty($_SESSION['id'])){
    $_SESSION['id']= session_id();
  }else{

  }

  $_SESSION['msg']="Registrataion Complete Successfully";
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "easytraveller";


  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $uname = $_POST['username'];
  $pass = $_POST['pwd'];
  $email = $_POST['email'];
  $phoneno = $_POST['phone'];
  $dob = $_POST['date'];
  $gender = $_POST['gender'];
  $address = $_POST['houseno'] . "  " .$_POST['roadno'];
  $city = $_POST['city'];
  $status = "user";


  $conn = new mysqli($servername,$username,$password,$dbname);

  if($conn->connect_error){
    die("Connection Failed: ". $conn->connect_error);
  }

  $sql = "INSERT INTO `user`(`firstname`, `lastname`,`username`, `password`, `email`, `phoneno`, `dob`, `gender`, `address`, `city`, `status`)
        VALUES ('$fname','$lname','$uname','$pass','$email','$phoneno','$dob','$gender','$address','$city','$status')";

  if($conn->query($sql) === TRUE){
    echo "Congratulation..";
  }else{
    echo "Error: ". $sql . "<br>" . $conn->error;
  }

  $conn->close();
}


function checkuser(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "easytraveller";

  $conn = new mysqli($servername,$username,$password,$dbname);

  if($conn->connect_error){
    die("Connection Failed: ". $conn->connect_error);
  }

  $sql = "SELECT username FROM `user`";
  $result = $conn->query($sql);

  if($result->num_rows >0){
    while($row= $result->fetch_assoc()){
      if($row['username']==$_POST['username']){
        $GLOBALS['flag'] = 1;
      }
    }
  }

  $conn->close();
}



  if(empty($_POST['fname'])){
    echo "First Name Required!";
  }
  else if(empty($_POST['lname'])){
    echo "Last Name Required!";
  }
  else if(empty($_POST['username'])){
    echo "User Name Required";
  }
  else if(empty($_POST['pwd'])){
    echo "Password Required!";
  }
  else if(empty($_POST['cpwd'])){
    echo "Confirm your pass";
  }
  else if(empty($_POST['email'])){
    echo "Email is Required!";
  }
  else if(empty($_POST['phone'])){
    echo "Phone no is required!";
  }
  else if(empty($_POST['date'])){
    echo "Date is required!";
  }
  else if(empty($_POST['gender'])){
    echo "Gender is required.";
  }
  else if(empty($_POST['houseno'])){
    echo "House No is required.";
  }
  else if(empty($_POST['roadno'])){
    echo "Road No is required.";
  }
  else if(empty($_POST['city'])){
    echo "City Required";
  }
  else if(empty($_POST['agree'])){
    echo "You have to agreed to our terms and policy.";
  }
  else{
    if(!preg_match('#^[A-Za-z_.]{1}#',$_POST['fname'])){
      echo " First Name Must start with letter.";
    }
    else if(preg_match('#[0-9]#',$_POST['fname'])){
      echo " First Name Can't Contain Numeric value.";
    }
    else if(preg_match('#[A-Za-z_.]{1};#',$_POST['lname'])){
      echo "Last Name Must start with letter.";
    }
    else if(preg_match('#[0-9]#',$_POST['lname'])){
      echo " Last Name Can't Contain Numeric value.";
    }
    else if (!preg_match('#^[A-Za-z_.]{1}#',$_POST['username'])){
      echo "username Must Start with letter";
    }
    else if(!preg_match('#^[A-Za-z]{2}#',$_POST['username'])){
      echo "Contain at least two letter.";
    }
    else if(!preg_match('#^[A-Za-z]{8}#',$_POST['pwd'])){
      echo "Password shoud minimum 8 characters";
    }
    else if(!preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/',$_POST['pwd'])){
      echo "Password must contain at least 1 special character.";
    }
    else if(!preg_match("#^[A-Za-z]*@[A-Za-z]#",$_POST['email'])){
      echo "User inValid Email.";
    }
    else{
      if($_POST['pwd']==$_POST['cpwd']){
        checkuser();
        if($flag==1){
          echo "try another username";
        }else{
          dbreg();
          header('Location:registration.php');
        }

      }else{
        echo "Password Didn't match.";
      }
    }
  }
?>
