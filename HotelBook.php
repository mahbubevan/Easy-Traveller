<!doctype html>
<html>
	<head>
		<title>Book Hotel html</title>
	</head>
	<body>
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table>
			<tr>
			<td>Name:</td>
			<td><input type="text" name="name"></td>
			</tr>
			<tr>
			<td>Contact No:</td>
			<td><input type="text" name="contact"></td>
			</tr>
			<tr>
			<td>Email:</td>
			<td><input type="email" name="email"></td>
			</tr>
			<tr>
			<td>Member:</td>
			<td><input type="text" name="member"></td>
			</tr>
			<tr>
			<td>Number of Rooms:</td>
			<td><input type="text" name="room"></td>
			</tr>
			<tr>
			<td>Check In Date:</td>
			<td><input type="date" id="myDate" type="month" id="myMonth" value="2018-07" name="cdate"></td>
			</tr>
			<tr>
			<td>Check Out Date:</td>
			<td><input type="date" id="myDate" type="month" id="myMonth" value="2018-07" name="odate"></td>
			</tr>
			<tr>
			<td></td>
			<td><input type="submit" value="submit"></td>
			</tr>

	</table>

	<?php
	 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
    echo "Name is required";
	echo "<br>";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       echo "Only letters and white space allowed for name";
       echo "<br>";
	}
       else{
		   $name = test_input($_POST["name"]);
		   echo "Your Inputs";
		   echo "<br>";
		   echo "Name:".$name;
	   }
    }

  if (empty($_POST["email"])) {
    echo "Email is required";
	echo "<br>";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format";
      echo "<br>";
    }
	else{
		$email = test_input($_POST["email"]);
		echo "<br>";
		echo "Email :".$email;

  }
  }
  if (empty($_POST["member"])) {
    echo "Member no is required";
	echo "<br>";
  } else {
    $member = test_input($_POST["member"]);
	echo "<br>";
	echo "Number Of Member:".$member;
  }
  if (empty($_POST["room"])) {
    echo "Rooms no is required";
	echo "<br>";
  } else {
    $room = test_input($_POST["room"]);
     echo "<br>";
    echo "NumberOf Rooms".$room;
    }

  if (empty($_POST["cdate"])) {
    echo "Check Date  is required";
	echo "<br>";
  } else {
    $cdate = test_input($_POST["cdate"]);
	echo "<br>";
    echo "Check In Date:".$cdate;
  }
  if (empty($_POST["odate"])) {
    echo "Check out date is required";
	echo "<br>";
  } else {
    $odate = test_input($_POST["odate"]);
	echo"<br>";
     echo "Check Out Date:".$odate;
  }
  }


  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
	?>
</form>


</body>
</html>
