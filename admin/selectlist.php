<?php 
  include "connection.php";
//  echo $_SESSION['member']; exit;
 if(empty($_SESSION['member']))
{//echo "sfasdfs"; 
header("location:index.php"); 		exit;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
<!--
.style10 {color: #FFFFCC}
-->
</style>
<head>
<script>


function java1()
{
var a=document.myform.textfield2.value;
var b=document.myform.textfield4.value;

if(a=="sohil" && b=="sohil123")
{
window.location="new.html";return false;
}
else
{
alert("username or password sacho nakho");
 return false; 
}
}



</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E MART</title>
<style type="text/css">
.wh{color:#FFFFFF;
font-weight:bold;
}
.ffont{ 

color: #993300;
font-family: Verdana, Arial, Helvetica, sans-serif;
font-stretch:semi-condensed; 
font-weight: bold;


}
.style4 {font-size: 36px}
.style6 {
	font-size: 16px;
	color: #FFFFCC;
}
.style9 {
	color: #FFFF66;
	font-family: "Courier New", Courier, monospace;
}
.style10 {
	
	background:#331A00;

	}
	
	.space{
	padding-left:inherit:50px;
	
	}
.style17 {color: #FFFF00}
.style19 {
	color: #000000;
	font-weight: bold;
}
.style20 {
	color: #333333;
	font-weight: bold;
}
.style21 {color: #333333}
</style>
</head>

<body  class="style10">
<tr>
  <td height="64" align="left" valign="middle" class="wh style4" ></p>
    <td width="251" rowspan="2" align="center" valign="middle"  ><?php echo (!empty($_SESSION['member'])) ? '<a href="logout.php"><font color="#00CC00"><b>Logout</b></font></a>' : ''; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
  
  <tr>
    <td height="28" align="left" valign="middle" bordercolor="#000000" class="space">
    <a href="home.php" class="style17">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="entry.php" class="style17">entry</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="selectlist.php" class="style17">selection list</a>
    
	
	


<p align="center">&nbsp;</p>
<table align="center"><tr><td><table width="200" border="1" bgcolor="#FFFF99" align="left"><tr>
    <td align="center" width="70"><span class="style19">User ID</span></td>
    <td align="center"><span class="style19">Password</span></td>
    
  </tr>
  
  <?php
  $sel="select * from entry";
  $query=mysql_query($sel);
  while($row=mysql_fetch_array($query))	
  { /*echo'<pre>';  
   print_r($row);*/
  ?>
  <tr>
    <td height="23" width=""><span class="style21"><?php echo $row['uname']; ?>&nbsp;&nbsp;&nbsp;</span>
    </td>
    <td height="23" width=""><span class="style21"><?php echo $row['pass1']; ?>&nbsp;&nbsp;&nbsp;</span>
    </td>
  
  
  
  <?php } ?>
  </tr></td>
  </table>
  <td>
  <table bgcolor="#FFFF99" align="right" border="1">
  <tr><td><span class="style19">Events</span></td></tr>
  
  
  <?php
 
  $sel="select * from selection";
  $query=mysql_query($sel);
  while($row=mysql_fetch_array($query))	
  { /*echo'<pre>';  
   print_r($row);*/
  ?>
  
  <tr>
    <td height="23" width="400"><span class="style21">
    										<?php echo $row['uname']; ?>&nbsp;&nbsp;&nbsp;
    									  <?php echo $row['pass1']; ?>&nbsp;&nbsp;&nbsp;
                                          (1)<?php echo $row['event1']; ?>&nbsp;&nbsp;&nbsp;
    									  (2)<?php echo $row['event2']; ?>&nbsp;&nbsp;&nbsp;
                                          (3)<?php echo $row['event3']; ?>&nbsp;&nbsp;&nbsp;
                                          (4)<?php echo $row['event4']; ?>&nbsp;&nbsp;&nbsp;	
    </span></td>
   
  </tr>
  
  
  <?php } ?>
 </td> 
</table>
</tr>
</table>

</body>
</html>
