<?php
require('adminlogin.php');
if(!isset($_POST['adsubmit'])){
  require('logout.php');
}else{
  if(empty($_SESSION['id'])){
    require('logout.php');
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
  <?php
    require_once('change.html');
  ?>
  <div class="container-fluid navigation">
    <div class="row">
      <div class="col">
        <h4 class="text-dump"> Easy Traveller || Admin Panel </h4>
      </div>
      <div class="col">
        <h4 class="text-right text-dump2"><a href="logout.php"> Logout </a> </h4>
      </div>
    </div>
  </div>

<div class="container-fluid">
  <div class="dashboard">
    <div class="row">
      <div class="col-md-3">
        <ul class="list-group font-weight-bold text-monospace">
              <a href="dashboard.php" target="iframe_a"><li class="list-group-item" > Dashboard </li></a>
              <a href="userlist.php" target="iframe_a"><li class="list-group-item"> User List </li></a>
              <a href="package.html" target="iframe_a"><li class="list-group-item"> ADD Packages </li></a>
              <a href="packagelist.php" target="iframe_a"><li class="list-group-item"> Available Packages </li></a>
              <a href="addres.php" target="iframe_a"><li class="list-group-item"> Add Restaurant </li></a>
              <a href="bookinglist.php" target="iframe_a"><li class="list-group-item"> Booking Lists </li></a>

                <h2> Search user list </h2>
                Name : <input type="text" onkeyup="getData(this.value)"/>
                    <p id="sug">Suggestion</p>
                    <script>
                      function getData(str)
                      {
                        if(str.length==0)
                        {
                        document.getElementById("sug").innerHTML="";
                        return ;
                        }
                        else{
                          var xhttp=new XMLHttpRequest();
                          xhttp.onreadystatechange=function()
                          {
                            if(this.readyState==4 && this.status==200)
                            {
                              document.getElementById("sug").innerHTML=this.responseText;
                            }
                          }
                          xhttp.open("Get","data.php?p="+str.true);
                          xhttp.send();
                        }
                      }
                    </script>
            

            </ul>
          <div class="container admin-details">
            <?php
              echo $_SESSION['admin']."<br>";
              echo $_SESSION['pass']."<br>";
              echo $_SESSION['pin']."<br>";
            ?>
          </div>
      </div>
      <div class="col-md-9">
          <iframe src="dashboard.php" name="iframe_a"></iframe>
      </div>
    </div>
    <div class="row">
      <label> Text Color </label>
      <input style="color:{{color}}" ng-model="color">
    </div>

  </div>
</div>
</body>



</html>
