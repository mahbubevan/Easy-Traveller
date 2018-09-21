<?php
  $id = $_GET['ID'];
  require('mysqlconnection.php');
  $sql = "DELETE FROM user WHERE userid='$id'";

  if($conn->query($sql) === TRUE){
      echo "Deleted.. Redirecting within 2 sec.";
      }else{
          echo "Error: ". $sql . "<br>" . $conn->error;
        }

  $conn->close();
  header('refresh:1,userinfo.php');

?>
