
<?php 
  include "connection.php";
//  echo $_SESSION['member']; exit;
 if(empty($_SESSION['member']))
{//echo "sfasdfs"; 
header("location:index.php");
exit;
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
.style16 {color: #FFFF00}
.style17 {color: #FFFF33}
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
text{
text-decoration:none;
}
.style9 {
	color: #FFFF66;
	font-family: "Courier New", Courier, monospace;
}
.style10 {
	
	background:#331A00;

	}
	
	.space{
	padding-left:50px;
	
	}
</style>
</head>

<body  class="style10"><center>
<table width="959" height="664" border="0">
  <tr>
    <td height="64" align="left" valign="middle" class="wh style4" ><span class="style9">
      <marquee behavior="slide"></marquee></span>
    
    <td width="251" rowspan="2" align="center" valign="middle"  >
      
      <p><?php echo (!empty($_SESSION['member'])) ? '<a href="logout.php"><font color="#00CC00"><b>Logout</b></font></a>' : ''; ?></td>
  </tr>
  
  <tr>
    <td height="28" align="left" valign="middle" bordercolor="#000000">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="selectlist.php" class="style16">Selection list</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="entry.php" class="style17">entry</a>    </td>
    </tr>
  <tr>
    <td rowspan="2" align="center" valign="middle">&nbsp;</td>
    <td height="234" align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="283" align="center">&nbsp;</td>
  </tr>
  
  <tr>
    <td height="31"  align="left" valign="middle" ><form id="form4" name="form4" method="post" action="">
      <p>&nbsp;</p>
      </form>
            </td>
    <td align="center" valign="middle"  class="wh">&nbsp;</td>
  </tr>
</table>
<form id="form1" name="form1" method="post" action="">
  <label></label>
</form>
</center>
</body>
</html>
