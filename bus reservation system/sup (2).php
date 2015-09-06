<HTML>
<HEAD>
<TITLE>SIGN UP</TITLE>

</HEAD>
</HEAD>
<BODY bgcolor="cyan" >

<script type="text/javascript">
function validateForm()
{
var x=document.forms["myForm"]["Name"].value
var a=document.forms["myForm"]["password"].value
var b=document.forms["myForm"]["fname"].value
var c=document.forms["myForm"]["lname"].value
var d=document.forms["myForm"]["sec"].value
var g=document.forms["myForm"]["ans"].value
var e=document.forms["myForm"]["sex"].value
var f=document.forms["myForm"]["pemail"].value
if ((x==null || x=="")||(a==null || a=="")||(b==null || b=="")||(c==null || c=="")||(d==null || d=="")||(f==null || f=="")||(g==null || g==""))
 {
  alert("you didnot filled all the fields so please fill all fields");
  return false;
  }
else
if(a.length<=6)
{
 alert("password less than 6 characters");
  return false;
}

}
</script>
<form name="myForm" action="#" onsubmit="return validateForm()"
	method="post"
	target=_blank>
<blink>
<h2><center><i><u>REGISTER HERE</u></i></center></h2>
</blink>
<hr>
<h3><center>please fill all fields given here</center><h3>
<hr>
<table align="center" border=0>
<tr>
<td>
Username
</td>
<td><input  type="text"
	name="Name"
	size="25"
	maxlength="50">
</td>
</tr>
<tr>
<td>
Password 
</td><td><input  type="password"
	name="password" value=""size="25" maxlength=10><i>(**Minimum 6 characters)</i><br>
</td>
</tr>
<tr>
<td>
Firstname
</td>
<td> <input       type="text"
	name="fname"
	value=""
	size="25"
	maxlength="50">
</td>
</tr>
<tr>
<td>Lastname</td>
<td><input       type="text"
	name="lname"
	value=""
	size="25"
	maxlength="50">
</td>
</tr>
<tr>
<td >
Enter Question</td>
<td><input       type="text"
	name="sec"
	value=""
	size="25"></td>
</tr>
<tr>
<td >
Enter Answer</td>
<td><input       type="text"
	name="ans"
	value=""
	size="25"></td>
</tr>
<tr>
<td>Gender
</td>
<td>
<input       type="radio"
	name="sex"
	value="male">Male
</td>
</tr>
<tr>
<td></td>
<td>
<input       type="radio"
	name="sex"
	value="female">Female
</td>
</tr>
<tr>
<td>
Qualification</td>
<td>
<input       type="radio"
	name="a">Student</td></tr>
<tr>
<td>
</td>
<td>
<input       type="radio"
	name="a">Professional</td>
</tr>
<tr>
<td>
</td>
<td>
<input       type="radio"
	name="a">Others
</td></tr>
<tr>
<td >
E-mail:</td><td><input       type="text"
	name="pemail"
	size="40"
	maxlength="50"><br>
</td>
</tr>
<tr>
</tr>
<tr>
<td>
</td>
<td>
<input       type="submit"
	name="submit"
	value="register">
<input	type="reset" name="reset"
	value="reset">
</td>
</tr>
</table>
<hr><a href="toc.html">Terms and conditions</a>
</form>
<?php
mysql_connect("localhost","root","") or die("could not connect to data base");
mysql_select_db("dbn");
if(!empty($_REQUEST['submit']))
{	
	$q="INSERT INTO userdetail VALUES('".$_REQUEST['Name']."', '".$_REQUEST['password']."','".$_REQUEST['fname']."', '".$_REQUEST['lname']."','".$_REQUEST['pemail']."','".$_REQUEST['sec']."','".$_REQUEST['ans']."')";
$r="INSERT INTO userinfo VALUES('".$_REQUEST['Name']."', '".$_REQUEST['password']."','".$_REQUEST['fname']."')";
	header("Location:inin.html");
		mysql_query($q) or die(mysql_error());
	mysql_query($r) or die(mysql_error());

}
?>
</BODY>
</HTML>
