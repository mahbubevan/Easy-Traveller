<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </head>

  <body>
    <br/><br/>
    <div class="container">
        <?php
          require('mysqlconnection.php');
          $sql = "SELECT * FROM `user`";
          $result = $conn->query($sql);
          echo '<div class="row">';
          if ($result->num_rows>0){
            while($row=$result->fetch_assoc()){
              echo '
                <div class="col-md-3">
                    <h4>'.$row['username'].'</h4>
                  </div>
                  <div class="col-md-3">
                      <h4>'.$row['email'].'</h4>
                    </div>
                    <div class="col-md-3">
                        <h4>'.$row['phoneno'].'</h4>
                      </div>
                  <div class="col-md-3">
                    <a href="userdelete.php?ID='.$row['userid'].'" class="btn btn-danger" type="submit" name="submit">Delete User</a>
                  </div>

              '."<br><br>";
            }
          }
          echo '</div>';
        ?>

    </div>
  </body>
</html>
