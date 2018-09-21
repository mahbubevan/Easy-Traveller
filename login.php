<?php

if(empty($_POST['name'])){
  header('location:index.php');
}
else if(empty($_POST['pwd'])){
  header('location:index.php');
}
else{
  $userdb="";
  $passdb="";
  $fnamedb = "";
  $lnamedb = "";
  $uiddb = "";
  $emaildb="";
  $phonedb="";
  $dobdb="";
  $genderdb="";
  $addressdb="";
  $citydb="";
  $statusdb="";
  $sessionid ="";

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "easytraveller";

  $uname = $_POST['name'];
  $pass = $_POST['pwd'];

  $conn = new mysqli($servername,$username,$password,$dbname);

  if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM `user` WHERE username='$uname' and password='$pass'";
  $result = $conn->query($sql);

  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
          $GLOBALS['fnamedb']=$row['firstname'];
          $GLOBALS['lnamedb']=$row['lastname'];
          $GLOBALS['uiddb']= $row['userid'];
          $GLOBALS['userdb']=$row['username'];
          $GLOBALS['passdb']=$row['password'];
          $GLOBALS['emaildb']=$row['email'];
          $GLOBALS['phonedb']=$row['phoneno'];
          $GLOBALS['dobdb']=$row['dob'];
          $GLOBALS['genderdb']=$row['gender'];
          $GLOBALS['addressdb']=$row['address'];
          $GLOBALS['citydb']=$row['city'];
          $GLOBALS['statusdb']=$row['status'];
    }
  }

  if($uname==$userdb && $pass == $passdb && $statusdb=="user"){
    echo "Logged In! You will be redirected ";
    session_start();
      if(empty($_SESSION['id'])){
        $_SESSION['id'] = session_id();
        }else{
    }

    $_SESSION['firstname'] = $fnamedb;
    $_SESSION['lastname']= $lnamedb;
    $_SESSION['uiddb'] = $uiddb;
    $_SESSION['userdb'] = $userdb;
    $_SESSION['passdb'] = $passdb;
    $_SESSION['emaildb']= $emaildb;
    $_SESSION['phonedb']= $phonedb;
    $_SESSION['dobdb']= $dobdb;
    $_SESSION['genderdb']= $genderdb;
    $_SESSION['addressdb']= $addressdb;
    $_SESSION['citydb']= $citydb;
    $_SESSION['statusdb']= $statusdb;

    function set_cookie(){
      $cookie_name = "user";
      $cookie_value = $_SESSION['userdb'];
      $user_pass = "pass";
      $userpass_value = $_SESSION['passdb'];
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
      setcookie($user_pass, $userpass_value, time() + (86400 * 30), "/");

      if(!isset($_COOKIE[$cookie_name])) {
          echo "Cookie named '" . $cookie_name . "' is not set!";
      } else {
          echo "Cookie '" . $cookie_name . "' is set!<br>";
          echo "Value is: " . $_COOKIE[$cookie_name];
      }
    }
    
    set_cookie();
    header('refresh:1;index.php');
  }else{
    echo "Invalid user or password"."<br>";
    header('refresh:3,login.html');
  }
}

?>
