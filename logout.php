<?php
  session_start();
  echo $_SESSION['id'];
  session_unset();
  session_destroy();
  header('Location:index.php');

  exit();
?>
