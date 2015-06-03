<?php
include"connection.php";

$uname=$_POST['uname'];
$pass1=$_POST['pass1'];


/*$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];*/



//echo $uname; exit;
$var=$_POST['entry']; 
$insert="insert into entry(uname,pass1) values('$uname','$pass1')";
echo $insert;
$query=mysql_query($insert);
header("location:entry.php");
exit;

?>