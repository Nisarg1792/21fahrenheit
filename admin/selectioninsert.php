<?php
	  include "connection.php";
	 // echo $_POST['password']; exit;
$sql = "select * from entry where uname = '".$_POST['uname']."' and pass1 = '".$_POST['pass1']."'";
$user = $obj->select($sql);

if(empty($user))
{//echo "rong"; exit;
   	$_SESSION['errMsg'] = "Please try again";
	header("location:/21fahrenheit/registration.php");exit;
}
else
{//echo "right"; exit;
	$_SESSION['errMsg'] = "Login Successful";
	$_SESSION['member'] = $user[0][0];
//	header("location:/21fahrenheit/selection.php");exit;
	
}


?>

<?php
include "connadmin.php";

$uname=$_POST['uname'];
$pass1=$_POST['pass1'];
$event1=$_POST['event1'];
$event2=$_POST['event2'];
$event3=$_POST['event3'];
$event4=$_POST['event4'];


/*$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];*/




$var=$_POST['selection']; 
$insert="insert into selection(uname,pass1,event1,event2,event3,event4) values('$uname','$pass1','$event1','$event2','$event3','$event4')";
echo $insert;
$query=mysql_query($insert);
header("location: /21fahrenheit/selection.php");
exit;

?>