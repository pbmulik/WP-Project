<?php

session_start();
?>



<?php
$Username=$_POST['Username'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$con=@mysql_connect("localhost","root","form") or die(mysql_error());
$db=@mysql_select_db("hms",$con)or die(mysql_error());

$sql="SELECT * FROM  comments WHERE Username='$Username' and Email='$Email' and Password='$Password'";

$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count<1){echo "Wrong Username or Password";}
else
	{
		$_SESSION[user]=$username;
		header("location:index.php");
	}

ob_end_flush();
?>
