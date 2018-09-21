<?php
session_start();
require('mysqlconnection.php');
$userdb= $_POST['username'];
$passdb=$_POST['pwd'];
$fnamedb = $_POST['fname'];
$lnamedb = $_POST['lname'];
$emaildb=$_POST['email'];
$phonedb=$_POST['phoneno'];
$dobdb=$_POST['dateofbirth'];
$genderdb=$_POST['gender'];
$addressdb=$_POST['address'];
$citydb=$_POST['city'];
$suserdb = $_SESSION['userdb'];
$sql = "UPDATE user SET username='$userdb', password='$passdb', firstname='$fnamedb',lastname='$lnamedb', email='$emaildb',phoneno='$phonedb',dob='$dobdb', gender='$genderdb',address='$addressdb', city='$citydb' WHERE username='$suserdb'";

if($conn->query($sql) === TRUE){
    echo "Congratulation.. Logging Out.. You have to login again";
    $conn->close();
    session_unset();
    session_destroy();
?>
