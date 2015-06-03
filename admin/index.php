<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
<!--
.style10 {color: #FFFFCC}
.style16 {color: #FFFFFF}
-->
</style>
<head>
<script>



</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin</title>
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

<body  class="style10"><center>
<table width="959" height="664" border="0">
  <tr>
    <td height="64" align="left" valign="middle" class="wh style4" ><span class="style9">
      <marquee behavior="slide">
      </marquee>
      
    </span>
    <td width="251" rowspan="3" align="center" valign="middle"  ><p></td>
  </tr>
  
  <tr>
    <td height="28" align="left" valign="middle" bordercolor="#000000" class="space">&nbsp;</td>
    </tr>
  <tr>
    <td align="center" valign="middle"><form name="myform" action="logincheck.php" id="myform" method="post">
                <table width="315" border="0" bordercolor="#FFFFCC"  >
                <tr>
                <td  colspan="2" align="center"><p><strong> USER ACCOUNT INFO</strong></p><?php echo (!empty($_SESSION['errMsg'])) ? $_SESSION['errMsg'] : ""; ?></td>
                </tr>
                <tr>
                <td width="107"  align="left">Username:</td>
                <td width="257" align="left" ><input name="username" type="text" id="username" maxlength="15" />            </td>
                </tr>
                <tr>
                <td rowspan="3" align="left" valign="top">Password:</td>
                <td align="left">
                <input name="password" type="password" id="password" maxlength="10" />            </td>
                </tr>
                <tr>
                <td height="36" align="left">
                <input name="submit" type="submit" id="submit" value="submit" /></td>
                </tr>
                </table>
        
        </form>    </td>
    </tr>
  
  
  <tr>
    <td height="31"  align="left" valign="middle" >
      <p>&nbsp;</p>
                 </td>
    <td align="center" valign="middle"  class="wh">&nbsp;</td>
  </tr>
</table>

</center>
</body>
</html>

