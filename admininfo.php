<?php
  session_start();
?>

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
      <form action="adminupdate.php" method="post">
        <div class="row form-group">
          <div class="col">
            <label > Admin Name </label>
          </div>
          <div class="col">
            <input class="form-control" type="text" name="adminname" value="<?php echo $_SESSION['admin'];?>"/>
          </div>
        </div>
        <div class="row form-group">
          <div class="col">
            <label > Password </label>
          </div>
          <div class="col">
            <input class="form-control" type="text" name="adminpwd" value="<?php echo $_SESSION['pass'];?>"/>
          </div>
        </div>
        <div class="row form-group">
          <div class="col">
            <label > Pin </label>
          </div>
          <div class="col">
            <input class="form-control" type="text" name="adminpin" value="<?php echo $_SESSION['pin'];?>"/>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input class="btn btn-danger" type="submit" name="submit" value="Make Change"/>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
