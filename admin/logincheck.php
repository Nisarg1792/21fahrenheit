<?php
	  require "connection.php";
	 // echo $_POST['password']; exit;
$sql = "select * from adminlogin where username = '".$_POST['username']."' and password = '".$_POST['password']."'";
$user = $obj->select($sql);

if(empty($user))
{//echo "rong"; exit;
   	$_SESSION['errMsg'] = "Enter valid user name or password";
	header("location:index.php");
}
else
{//echo "right"; exit;
	$_SESSION['errMsg'] = "";
	$_SESSION['member'] = $user[0][0];
	header("location:home.php");	
}

?>
