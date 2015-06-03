<?php
	  include "connection.php";
	 // echo $_POST['password']; exit;
$sql = "select * from entry where uname = '".$_POST['uname']."' and pass1 = '".$_POST['pass1']."'";
$user = $obj->select($sql);

if(empty($user))
{//echo "rong"; exit;
   	$_SESSION['errMsg'] = "Please try again";
	header("location:registration.php");
}
else
{//echo "right"; exit;
	$_SESSION['errMsg'] = "Login Successful";
	$_SESSION['member'] = $user[0][0];
	header("location:selection.php");
	
}


?>
