<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome Traveller</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/plist.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
  <div class="container php-content">
    <?php
    require('mysqlconnection.php');
    $sql = "SELECT * FROM `package`";
    $result = $conn->query($sql);

    if($result->num_rows>0){
      while($row = $result->fetch_assoc()){
        echo
          '<div class="row">
            <div class="col-md-5">

              <ul class="list-group font-weight-bold text-monospace text-primary">
                <li class=""> Package Id: '. $row['packageid'].'</li>
                <li class=""> Package Name: '. $row['packagename'].' </li>
                <li class=""> Details: '. $row['details'].' </li>
                <li class=""> Starting Date '. $row['availabledate'].' </li>
                <li class=""> Cost(Exclude:Your Expense): '. $row['cost'].'</li>
              </ul>
            </div>
            <div class="col-md-7 ">
              <img src="uploads/'.$row['img'].'" class="img-fluid img-thumbnail img-section">
            </div>
          </div>'."<br>";

      }
    }

    ?>
  </div>
</html>
