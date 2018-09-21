<?php
  session_start();
  if(empty($_SESSION['id'])){
    header('location:index.php');
  }else{
    if(empty($_SESSION['userdb'])){

    }else{
      header('location.index.php');
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome Traveller</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/admin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <h4> User Data List </h4>
    <div class="php-content">
      <?php
        require('mysqlconnection.php');
        $sql = "SELECT * FROM `user`";
        $result = $conn->query($sql);

        if($result->num_rows>0){
          while ($row = $result->fetch_assoc()){
              echo '<ul class="list-group font-weight-bold text-monospace">
                <li class="list-group-item"> User Id: '. $row['userid'].'</li>
                <li class="list-group-item"> Full Name: '. $row['firstname'].''.$row['lastname'].'  </li>
                <li class="list-group-item"> Username: '. $row['username'].' </li>
                <li class="list-group-item"> Email: '. $row['email'].' </li>
                <li class="list-group-item"> Phone No: '. $row['phoneno'].' </li>
                <li class="list-group-item"> Date Of Birth: '. $row['dob'].'</li>
                <li class="list-group-item"> Gender: '. $row['gender'].'</li>
                <li class="list-group-item"> Address:  '. $row['address'].'</li>
                <li class="list-group-item"> City:  '. $row['city'].'</li>
                <li class="list-group-item"> User Status:  '. $row['status'].'</li>
              </ul>'."<br>";
          }
        }
      ?>
    </div>
  </div>

</body>
</html>
