
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Entry</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-slidedeck.pack.lite.js"></script>
<script type="text/javascript">
function validatePwd()
{

var invalid = " "; // Invalid character is a space
var minLength = 6; // Minimum length
var pass1 = document.myForm.pass1.value;
var pass2 = document.myForm.pass2.value;
// check for a value in both fields.
if (pass1 == '' || pass2 == '') {
alert('Please enter your password twice.');
return false;
}
// check for minimum length
if (document.myForm.pass1.value.length < minLength) {
alert('Your password must be at least ' + minLength + ' characters long. Try again.');
return false;
}
// check for spaces
if (document.myForm.pass1.value.indexOf(invalid) > -1) {
alert("Sorry, spaces are not allowed.");
return false;
}
else {
if (pass1 != pass2) {
alert ("You did not enter the same new password twice. Please re-enter your password.");
return false;
}
else {
alert('ok...password is correct.');
return true;
      }
   }
}


function validateForm()
{
var x=document.forms["myForm"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert('sorrry! Not valid e-mail address, please try again....');
  return false;
  }
}



 function Validate()
        {
           
            var y = document.myForm.contact_no.value;
           

           if(isNaN(y)||y.indexOf(" ")!=-1)
           {
              alert("sorry this is invalid...Enter numeric value of contact number")
              return false; 
           }
           if (y.length>10||y.length<10)
           {
                alert("enter 10 characters of contact number");
                return false;
           }
           if (y.charAt(0)!="9"&& y.charAt(0)!="8"&&y.charAt(0)!="7" )
           {
                alert('contact number should start with 9 or 8 or 7');
                return false;
           }
		   
		   
        }
		
		
		
		function zip_code()
{

if( document.myForm.zip.value == "" ||
           isNaN( document.myForm.zip.value ) ||
           document.myForm.zip.value.length != 6 )
   {
     alert( 'Please provide a zip in the format 380001.' );
 
     return false;
   }
   
}

function submit_button()
{
var a = document.myForm.pass1.value;
var b = document.myForm.pass2.value;
var c = document.myForm.contact_no.value;
var d=document.myForm.zip.value;
var e=document.forms["myForm"]["email"].value;
var f = document.myForm.uname1.value;
var g = document.myForm.fname.value;
var h = document.myForm.lname.value;
var i = document.myForm.address.value;
var j = document.myForm.state.value;
var k = document.myForm.city.value;

if (a == '' || b == ''||c == ''||d == ''||e == ''||f == ''||g == ''||h == ''||i == ''||j == ''||k == '') {
alert('Please fill all the required data.....');
return false;
}

}
</script>




<style type="text/css">
<!--
.style1 {color: #FFFFFF}
a:hover
{
color:#006699;
text-decoration:underline;

}
-->
</style>
</head>


<body id="top">
<div class="wrapper row2"><div id="topnav">
  <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<tr>
  <td height="64" align="left" valign="middle" class="wh style4" ></p>
    <td width="251" rowspan="2" align="center" valign="middle"  >
	<?php echo (!empty($_SESSION['member'])) ? '<a href="logout.php"><font color="#00CC00"><b>Logout</b></font></a>' : ''; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
  
  <tr>
    <td height="28" align="left" valign="middle" bordercolor="#000000" class="space">
    <a href="home.php" class="style17">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="entry.php" class="style17">entry</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="selectlist.php" class="style17">selection list</a>
<form name="myForm" id="entry" action="entryinsert.php" method="post" onsubmit="return submit_button()">
<div class="wrapper row4">
 <div id="container">
  <table width="10" border="0" bordercolor="#F8F9F3">
  
    
  <tr>
    <td height="24" colspan="2"><div align="center"><strong>User Account Info.</strong></div></td>
    </tr>
  <tr>
    <td width="51%"><div align="right">Username</div></td>
    <td>
     
    <input type="text" name="uname" id="uname" onchange="return validatename()" />
    </td>
   </tr>
 
  <tr>
    <td><div align="right">Password</div></td>
    <td>
      
      <input type="text" name="pass1" id="pass1" />
        
    
    </td>
  </tr>

  
  <tr>
    <td><div align="right"></div></td>
    </tr><tr><td>&nbsp;</td>
  </tr><tr><td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
     
      <div align="center">
        <input type="submit" name="submit" id="submit" value="Submit" />
        
        
        </div></td>
    </tr></form>
<script type="text/javascript">$('.slidedeck').slidedeck();</script>
</body>
</html>