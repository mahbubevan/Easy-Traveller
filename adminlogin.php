<?php
if(empty($_POST['admin'])){
  header('location:index.php');
}
else if(empty($_POST['pwd'])){
  header('location:index.php');
}
else if(empty($_POST['pin'])){
  header('location:index.php');
}
else{

$admindb="";
$passdb = "";
$pindb ="";
$admin = $_POST['admin'];
$pass = $_POST['pwd'];
$pin  = $_POST['pin'];
require('mysqlconnection.php');
$sql = "SELECT * FROM `admin` WHERE name='$admin' and password='$pass' and pin='$pin'";
$result = $conn->query($sql);

if($result->num_rows>0){
  while($row = $result->fetch_assoc()){
    $GLOBALS['admindb'] = $row['name'];
    $GLOBALS['passdb'] = $row['password'];
    $GLOBALS['pindb'] = $row['pin'];
    }
  }else{
  echo "Invalid data";
}

if($admin==$admindb && $pass==$passdb && $pin==$pindb){
  session_start();
    if(empty($_SESSION['id'])){
      $_SESSION['id'] = session_id();
      }else{
  }
  $_SESSION['admin']=$admindb;
  $_SESSION['pass']=$passdb;
  $_SESSION['pin']=$pindb;
}else{
  header('location:index.php');
}
}
?>
