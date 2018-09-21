<?php
  session_start();
  require('mysqlconnection.php');
  $adminname = $_POST['adminname'];
  $adminpass = $_POST['adminpwd'];
  $adminpin  = $_POST['adminpin'];
  $adminnamedb = $_SESSION['admin'];
  $adminpassdb = $_SESSION['pass'];
  $adminpindb = $_SESSION['pin'];

  $sql = "UPDATE admin SET name='$adminname', password='$adminpass', pin='$adminpin' WHERE name='$adminnamedb' and password='$adminpassdb' and pin='$adminpindb'";

  if($conn->query($sql) === TRUE){
      echo "Congratulation.. Logging Out.. You have to login again";
      $conn->close();
      session_unset();
      session_destroy();
      echo "<script>
          window.setTimeout(function(){
            window.top.location.href = \"index.php\";
          }, 2500);
      </script>";
      // die();
      // header('refresh:3,index.php');

      }else{
          echo "Error: ". $sql . "<br>" . $conn->error;
        }
?>
