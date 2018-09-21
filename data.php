<?php
	require('mysqlconnection.php');
		$sql="SELECT `firstname` FROM `user` WHERE `username` LIKE '".$_REQUEST['p']."%';";
		$res=mysqli_query($conn,$sql);
		$list="";
		for($i=0;$i<mysqli_num_rows($res);$i++)
		{
			$row[$i]=mysqli_fetch_array($res);
			echo $list='<br>'.$row[$i].$Name;
		}
		
?>
